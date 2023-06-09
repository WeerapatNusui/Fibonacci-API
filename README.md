# Fibonacci-API

Fibonacci-API เป็น api สำหรับคำนวนลำดับฟีโบนักชี(Fibonacci) โดยทำงานผ่าน Method GET จะรับค่า count=<value> จากนั้นจะรวมค่าตามจำนวนที่ระบุตั้งแต่ 1 ถึง 100 จำนวนและส่งกลับค่าเป็น JSON

## ตัวอย่างทดสอบ PHP

[ดูรูปผลทดสอบ PHP](https://drive.google.com/file/d/1T8X75Cbay2CY1enp6AVtEUP9ISgK-ZN5/view?usp=sharing)

## ตัวอย่างทดสอบ Postman

[ดูรูปผลทดสอบ Postman](https://drive.google.com/file/d/1qTjVWG4cBRK6L49VS4JQ-cU7-r7OP7Yl/view?usp=sharing)

## องค์ประกอบที่จำเป็น
โปรแกรม Web Server
 - [XAMPP](https://www.apachefriends.org/)

ภาษาโปรแกรมมิ่ง

 - [PHP](https://www.php.net/)

โปรแกรมสำหรับทดสอบ API

 - [Postman](https://www.postman.com/)
 
โปรแกรม Text Editor

 - [VSCode](https://code.visualstudio.com/)

ไลบารี่

 -  [JQuery](https://jquery.com/)

## ขั้นตอนการติดดตั้ง

 1. ติดตั้งโปรแกรมที่จำเป็นข้างต้น
 2. ดาวน์โหลดไฟล์ Fibonacci-API และแตกไฟล์ไว้ใน C:/xampp/htdoc/ หรือ
    ตำแหน่งของ Web Server ที่นักพัฒนาเลือกใช้ได้กำหนดไว้
 3. ตรวจสอบว่า Web Server ที่ใช้มีการติดตั้งและสามารถเรียกใช้ PHP
    ได้หรือไม่ หากเป็น XAMPP นั้นมีการติดตั้ง PHP
    ไว้พร้อมใช้งานเบื้อต้นแล้ว
 4. เปิดการทำงาน Web Server และทดสอบการทำงาน

## ขั้นตอนการทดสอบ

ทดสอบด้วย PHP ที่มีให้

 1. เปิด Browser และเข้าไปตาม URL ตัวอย่าง http://localhost/Fibonacci-API/
 2. กรอกตัวเลขใดก็ได้ตั้งแต่ 1 ถึง 100 ในช่องที่ระบุ กดปุ่ท GET
 3. จะมีผลลัพธ์ JSON แสดงออกมาในช่องผลลัพธ์
 
 ทดสอบด้วย Postman
 
 1. เปิดโปรแกรม Postman
 2. เลือก Method เป็น GET
 3. กรอก URL ในช่องรับ URL สำหรับทดสอบดังนี้ http://localhost/Fibonacci-API/api.php
 4. ในช่อง key ให้ใส่ชื่อตัวแปรที่ API กำหนด ในที่นี้ใช้เป็น count
 5. ในช่อง value ให้ใส่ค่าที่ต้องการส่งในที่นี้สามารถใส่ได้ตั้งแต่ 1 ถึง 100 เช่นใส่ 8
 6. กด Send
 7. จะมีผลลัพธ์ JSON แสดงออกมาในช่อง body ด้านล่าง

สามารถดูผลลัพธ์ได้ตามตัวอย่างข้างต้น
 
# เครดิต
[MajoSev](https://majosev.com) - Developer
