/**
 * Created by kieum on 11/20/2016.
 */
var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "resources/views/view/main_content.html"
        })
        .when("/start1", {
            templateUrl: "resources/views/view/start_exam.html"
        })
        .when("/start2", {
            templateUrl: "resources/views/view/content_question.html"
        })
        .when("/start3", {
            templateUrl: "resources/views/view/submitted.html"
        })
        .when("/getlist/:id", {
            templateUrl: "resources/views/view/info_monhoc.html"
        })
        .when("/start/:id", {
            templateUrl: "resources/views/view/submitted.html"
        })
        .when("/listcauhoi/:monthi_id/:dethi_id", {
            templateUrl: "resources/views/view/content_question2.html"
        })
        .otherwise({
            redirectTo: '/'
        });

});
app.controller('ThiTracNghiemController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/list11/1/1').success(function (response) {
        //console.log(response);
        $scope.cauhois = response;
    });
});
app.controller('SearchController', function ($scope,$http) {
    $http.get('http://localhost/hocmaivn/list_monhoc' ).success(function (response) {
        //console.log(response);
        $scope.search_list_monhoc = response;
    });
    $scope.names = ["Toán", "Văn", "Anh","Lý","Hóa"];
});

app.controller('MonThiController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/list_monhoc').success(function (response) {
        //console.log(response);
        $scope.monhocs = response;
    });
});
app.controller('GetNoCauHoiController', function ($scope, $http) {
    $http.get('http://localhost/hocmaivn/getnoquestion').success(function (response) {
        //console.log(response);
        $scope.no_cauhoi = response;
    });
});

app.controller('GetListCauHoiController', function ($scope, $http, $routeParams) {
    // $scope.monthi_id = $routeParams.monthi_id;
    $scope.dethi_id = $routeParams.dethi_id;
    $scope.monthi_id = $routeParams.monthi_id;
    $http.get('http://localhost/hocmaivn/listcauhoi/' + $scope.monthi_id+'/'+ $scope.dethi_id  ).success(function (response) {
        console.log(response);
        $scope._listcauhoi = response;
    });
});
app.controller('getListEachMonThiController', function ($scope, $http, $routeParams) {
    $scope.id = $routeParams.id;

    $http.get('http://localhost/hocmaivn/getlist/' +  $scope.id  ).success(function (response) {
        console.log(response);
        $scope._monhoc = response;
    });
});
app.controller('getListMonThiController', function ($scope, $http) {

    $http.get('http://localhost/hocmaivn/getlist' ).success(function (response) {
        //console.log(response);
        $scope.list_monhoc = response;
    });
});
app.controller('getStartedController', function ($scope, $http, $routeParams) {
    $scope.id = $routeParams.id;

    $http.get('http://localhost/hocmaivn/start/' +  $scope.id  ).success(function (response) {
        //console.log(response);
        $scope._monhoc = response;
    });
});
app.controller('QuizController', ['$scope', '$http', '$sce','$routeParams', function($scope, $http, $sce,$routeParams) {

    $scope.score = 0;
    $scope.activeQuestion = -1;
    $scope.activeQuestionAnswered = 0;
    $scope.percentage = 0;

    $scope.dethi_id = $routeParams.dethi_id;
    $scope.monthi_id = $routeParams.monthi_id;
    $http.get('http://localhost/hocmaivn/listcauhoi/' + $scope.monthi_id+'/'+ $scope.dethi_id  ).then(function (quizData) {
        $scope.myQuestions = quizData.data;
        $scope.totalQuestions = $scope.myQuestions.length;
    });
    // $http.get('quiz_data.json').then(function(quizData) {
    //     $scope.myQuestions = quizData.data;
    //     $scope.totalQuestions = $scope.myQuestions.length;
    // });

    $scope.selectAnswer = function(qIndex, aIndex){

        var questionState = $scope.myQuestions[qIndex].questionState;
        if(questionState != 'answered') {
            $scope.myQuestions[qIndex].selectedAnswer = aIndex;
            var correctAnswer = $scope.myQuestions[qIndex].correct;
            $scope.myQuestions[qIndex].correctAnswer = correctAnswer;

            if(aIndex === correctAnswer) {
                $scope.myQuestions[qIndex].correctness = 'correct';
                $scope.score+=1;
            } else {
                $scope.myQuestions[qIndex].correctness = 'incorrect';

            }
            $scope.myQuestions[qIndex].questionState = 'answered';
        }
        $scope.percentage = (($scope.score / $scope.totalQuestions) * 100).toFixed(1);
    }


    $scope.isSelected = function(qIndex, aIndex) {
        return $scope.myQuestions[qIndex].selectedAnswer === aIndex;
    }

    $scope.isCorrect = function(qIndex, aIndex) {
        return $scope.myQuestions[qIndex].correctAnswer === aIndex;
    }

    $scope.selectContinue = function() {
        return $scope.activeQuestion += 1;
    }

    $scope.createShareLinks = function(percentage) {
        var url = 'https://kieuminhduc.com.vn';
        var homeLink = '<a class="btn home"  href="#/"></a>';
        var faceLink = '<a class="btn facebook" target="_blank" href="http://facebook.com/share?text=I scored a ' + percentage + '%25 on this quiz about Saturn. Try to beat my score at&amp;hashtags=SaturnQuiz&amp;url=' + url + '"></a>';
        var twitterLink = '<a class="btn twitter" target="_blank" href="http://twitter.com/share?text=I scored a ' + percentage + '%25 on this quiz about Saturn. Try to beat my score at&amp;hashtags=SaturnQuiz&amp;url=' + url + '"></a>';

        var newMarkup = homeLink+ faceLink + twitterLink;

        return $sce.trustAsHtml(newMarkup);
    }


}]);