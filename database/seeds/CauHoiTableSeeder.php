<?php

use Illuminate\Database\Seeder;

class CauHoiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhoi')->insert(
			[
				//Toan
				[
					'questions' =>str_random(3). '. Đạo hàm của hàm số y = ln(sinx) bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "tgx"},
									{ "id" : 1, "text" : "cotgx"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],

				[
					'questions' =>str_random(3). '. Cho A(-2;-1),B(3;4), M(m;0). Giá trị m để MA2+MB2 đạt GTNN là:',
					'choices' => '[
									{ "id" : 0, "text" : "-1/2"},
									{ "id" : 1, "text" : "3"},
									{ "id" : 2, "text" : "2"},
									{ "id" : 3, "text" : "5/4"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). ' .Đồ thị của hàm số nào lồi trên khoảng (1,2)',
					'choices' => '[
									{ "id" : 0, "text" : "y=tgx"},
									{ "id" : 1, "text" : "y=2+cotgx"},
									{ "id" : 2, "text" : "y=2+3x+sinx"},
									{ "id" : 3, "text" : "y=cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '. Đạo hàm của hàm số y = ln(sinx) bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "tgx"},
									{ "id" : 1, "text" : "cotgx"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '. Cho hàm số: . Khi đó: y’ =?',
					'choices' => '[
									{ "id" : 0, "text" : "3coxsinx"},
									{ "id" : 1, "text" : "-3cotgxsinx"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1-cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Cho hình chóp tứ giác đều S.ABCD có cạnh đáy a và ASB 60 độ . Tính thể tích hình chóp',
					'choices' => '[
									{ "id" : 0, "text" : "a/2"},
									{ "id" : 1, "text" : "1/2a"},
									{ "id" : 2, "text" : "2/3a"},
									{ "id" : 3, "text" : "3/4a"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Cho hình chóp S.ABC có đáy là tam giác đều cạnh a. Hình chiếu vuông góc của S trên mặt phẳng (ABC)
là điểm H thuộc cạnh AB sao cho HA = 2HB. Tính thể
tích của khối chóp S.ABC',
					'choices' => '[
									{ "id" : 0, "text" : "5/12"},
									{ "id" : 1, "text" : "1/2"},
									{ "id" : 2, "text" : "3"},
									{ "id" : 3, "text" : "4"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'. Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=>2,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Đạo hàm của hàm số y = 1 - cotg2x bằng:',
					'choices' => '[
									{ "id" : 0, "text" : "-2cotgx"},
									{ "id" : 1, "text" : "2cotgx(1+cosx)"},
									{ "id" : 2, "text" : "sinx"},
									{ "id" : 3, "text" : "cosx"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>1,
					'created_at'  => new DateTime()
				],
				// Văn
				[
					'questions' => str_random(3).'.Muốn tóm tắt một văn bản chính luận cần:',
					'choices' => '[
									{ "id" : 0, "text" : "nêu rõ luận đề cùng các luận điểm chính bằng lời văn ngắn gọn."},
									{ "id" : 1, "text" : "nêu rõ luận điểm chính và các luận cứ tiêu biểu."},
									{ "id" : 2, "text" : "nêu rõ luận đề bằng lời văn ngắn gọn, súc tích."},
									{ "id" : 3, "text" : "nêu được nội dung cơ bản một cách ngắn gọn."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Thế nào là luận cứ trong bài văn nghị luận?',
					'choices' => '[
									{ "id" : 0, "text" : "Là ý kiến của người viết về vấn đề được bàn luận trong bài văn."},
									{ "id" : 1, "text" : "Là những quan niệm, đánh giá của người viết về vấn đề được bàn luận."},
									{ "id" : 2, "text" : "Là các tài liệu dùng làm cơ sở thuyết minh luận điểm."},
									{ "id" : 3, "text" : "Là cách thức, phương pháp triển khai vấn đề trong bài văn."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Quang Dũng viết bài thơ Tây Tiến bằng bút pháp:',
					'choices' => '[
									{ "id" : 0, "text" : "hiện thực"},
									{ "id" : 1, "text" : "lãng mạn"},
									{ "id" : 2, "text" : "trâm biếng"},
									{ "id" : 3, "text" : "trào lộng"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Trong bài thơ "Đất nước" của Nguyễn Đình Thi, khi nói về "mùa thu nay" chủ thể trữ tình đứng ở đâu để bộc lộ cảm xúc:',
					'choices' => '[
									{ "id" : 0, "text" : "Hà Nội"},
									{ "id" : 1, "text" : "Tây Ninh"},
									{ "id" : 2, "text" : "Việt Bắc"},
									{ "id" : 3, "text" : "Tây Bắc"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Tác phẩm "Đất nước" của Nguyễn Khoa Điềm vốn là:',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Trong bài thơ "Đất nước" của Nguyễn Đình Thi, khi nói về "mùa thu nay" chủ thể trữ tình đứng ở đâu để bộc lộ cảm xúc:',
					'choices' => '[
									{ "id" : 0, "text" : "Hà Nội"},
									{ "id" : 1, "text" : "Tây Ninh"},
									{ "id" : 2, "text" : "Việt Bắc"},
									{ "id" : 3, "text" : "Tây Bắc"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Chi tiết nào sau đây không chính xác khi giới thiệu về A Phủ("Vợ chồng A Phủ" của Tô Hoài)?',
					'choices' => '[
									{ "id" : 0, "text" : " Phủ khỏe, chạy nhanh như ngựa.."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Phủ mồ côi, nghèo khổ và không thể lấy vợ.."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Câu thơ nào sau đây (trích trong bài "Tây Tiến" của Quang Dũng) thể hiện rõ nét nhất cách nói vừa rất tự nhiên, hồn nhiên, vừa đậm chất lính?',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Cảm hứng của tùy bút Sông Đà được khơi gợi từ::',
					'choices' => '[
									{ "id" : 0, "text" : "  cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : " về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Phong cách ngôn ngữ nghệ thuật được thể hiện ở những đặc trưng cơ bản nào:',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Phong cách ngôn ngữ nghệ thuật được thể hiện ở những đặc trưng cơ bản nào:',
					'choices' => '[
									{ "id" : 0, "text" : "Heo hút cồn mây súng ngửi trời."},
									{ "id" : 1, "text" : "Nhớ về rừng núi nhớ chơi vơi"},
									{ "id" : 2, "text" : "Nhớ ôi Tây Tiến cơm lên khói."},
									{ "id" : 3, "text" : "Mường lát hoa về trong đêm hơi."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Tác phẩm nào sau đây không phải của Nguyễn Trung Thành?',
					'choices' => '[
									{ "id" : 0, "text" : "Rừng xà nu."},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Đất quảng"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Tác phẩm "Thương nhớ mười hai" của Vũ Bằng thuộc thể loại:',
					'choices' => '[
									{ "id" : 0, "text" : "Rừng xà nu."},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Đất quảng"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Trong tác phẩm "Những đứa con trong gia đình" của Nguyễn Thi, truyền thống nào đã gắn bó những con người trong gia đình với nhau?',
					'choices' => '[
									{ "id" : 0, "text" : "Rừng xà nu."},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Đất quảng"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Tác phẩm nào sau đây không phải của Nguyễn Trung Thành?',
					'choices' => '[
									{ "id" : 0, "text" : "Rừng xà nu."},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Đất quảng"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Hình ảnh nào sau đây có trong bài thơ "Việt Bắc" không thể hiện nét riêng của con người Việt Bắc?',
					'choices' => '[
									{ "id" : 0, "text" : "Người mẹ"},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Người lính"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>2,
					'created_at'  => new DateTime()
				],
				// Anh
				[
					'questions' => str_random(3).'.As a millionaire who liked to show off her wealth, Mrs. Smith paid...we asked.',
					'choices' => '[
									{ "id" : 0, "text" : "four time much than "},
									{ "id" : 1, "text" : "four time many than"},
									{ "id" : 2, "text" : "four time much can"},
									{ "id" : 3, "text" : "four time much as."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Regular exercise and good diet will bring.... fitness and health.',
					'choices' => '[
									{ "id" : 0, "text" : "from"},
									{ "id" : 1, "text" : "to"},
									{ "id" : 2, "text" : "at"},
									{ "id" : 3, "text" : "up"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Hình ảnh nào sau đây có trong bài thơ "Việt Bắc" không thể hiện nét riêng của con người Việt Bắc?',
					'choices' => '[
									{ "id" : 0, "text" : "Người mẹ"},
									{ "id" : 1, "text" : "Đất nước"},
									{ "id" : 2, "text" : "Người lính"},
									{ "id" : 3, "text" : "Bức thư cà mau."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.The pool should not be made so deep.... small children can be safe there.',
					'choices' => '[
									{ "id" : 0, "text" : "if"},
									{ "id" : 1, "text" : "can"},
									{ "id" : 2, "text" : "bt"},
									{ "id" : 3, "text" : "so."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.The pool should not be made so deep...small children can be safe there.',
					'choices' => '[
									{ "id" : 0, "text" : "if"},
									{ "id" : 1, "text" : "can"},
									{ "id" : 2, "text" : "bt"},
									{ "id" : 3, "text" : "so."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.The pool should not be made so deep....small children can be safe there.',
					'choices' => '[
									{ "id" : 0, "text" : "if"},
									{ "id" : 1, "text" : "can"},
									{ "id" : 2, "text" : "bt"},
									{ "id" : 3, "text" : "so."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.The pool should not be made so deep...small children can be safe there.',
					'choices' => '[
									{ "id" : 0, "text" : "if"},
									{ "id" : 1, "text" : "can"},
									{ "id" : 2, "text" : "bt"},
									{ "id" : 3, "text" : "so."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>3,
					'created_at'  => new DateTime()
				],

				// Lý
				[
					'questions' => str_random(3).'.Một chất điểm dao động có phương trình x = 10cos(15t + π) (x tính bằng cm, t tính bằng s). Chất điểm này dao động với tần số góc là.',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "3"},
									{ "id" : 3, "text" : "44."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Một trong những biện pháp làm giảm hao phí điện năng trên đường dây tải điện khi truyền tải điện năng đi xa đang được áp dụng rộng rãi là.',
					'choices' => '[
									{ "id" : 0, "text" : "4"},
									{ "id" : 1, "text" : "3"},
									{ "id" : 2, "text" : "b22t"},
									{ "id" : 3, "text" : "1."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Trong mạch dao động điện từ LC lí tưởng đang hoạt động, điện tích trên một bản tụ điện biến thiên điều hoà và',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "3"},
									{ "id" : 3, "text" : "4."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Khi nói về sóng cơ, phát biểu nào sau đây sai?',
					'choices' => '[
									{ "id" : 0, "text" : "44"},
									{ "id" : 1, "text" : "1"},
									{ "id" : 2, "text" : "2"},
									{ "id" : 3, "text" : "3."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Trong máy quang phổ lăng kính, lăng kính có tác dụng',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Pin quang điện (còn gọi là pin Mặt Trời) là nguồn điện chạy bằng năng lượng ánh sáng. Nó biến đổi trực tiếp quang năng thành',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Tầng ôzôn là tấm “áo giáp” bảo vệ cho người và sinh vật trên mặt đất khỏi bị tác dụng hủy diệt của',
					'choices' => '[
									{ "id" : 0, "text" : "1"},
									{ "id" : 1, "text" : "2"},
									{ "id" : 2, "text" : "22"},
									{ "id" : 3, "text" : "33."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>4,
					'created_at'  => new DateTime()
				],
				// Hóa
				[
					'questions' =>str_random(3). '.Chất nào sau đây thuộc loại chất điện li mạnh?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại nào sau đây là kim loại kiềm?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Axit fomic có trong nọc kiến. Khi bị kiến cắn, nên chọn chất nào sau đây bôi vào vết thương để giảm sưng tấy?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 0,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' =>str_random(3). '.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(3).'.Kim loại sắt không phản ứng được với dung dịch nào sau đây?',
					'choices' => '[
									{ "id" : 0, "text" : "H1)"},
									{ "id" : 1, "text" : "C02"},
									{ "id" : 2, "text" : "02"},
									{ "id" : 3, "text" : "H20."}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>5,
					'created_at'  => new DateTime()
				]

			]

        );
    }
}
