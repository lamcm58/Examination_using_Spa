##Hướng dẫn cài đặt thư mục vendor cho laravel:
 Điều kiện: phải cài đặt Composer trong máy(khuyên dùng)
 Chạy lệnh: composer install
 
##Hướng dẫn sử dụng Migrate:
###1. Sau khi clone code hoặc pull code về, tạo mới database "Spa", sau đó chạy lệnh:
 
 php artisan migrate
 
###2. Nếu đã tồn tại database trước đó, refesh database để cập nhật thay đổi:
 
 php artisan migrate:refresh
 
##Hướng dẫn sử dụng Seeder:
 
 Điều kiện: đã có cơ sở dữ liệu phía trên, chưa có dữ liệu gì cả
 
 php artisan db:seed

##Hướng dẫn thêm dữ liệu vào database:
Tạo mới database "Spa".
###1. Cách 1:
 Chạy Migration(hướng dẫn ở trên), sau đó vào phpMyadmin rồi import file spa.sql vào.
###2. Cách 2:
 Vào phpMyadmin rồi import thẳng file spa1.sql vào.