# FT-REACT
part 2 of prof.aukun

# Descrition
ex is exercise of teacher <br>
main file is index.php

# Docker
1. สร้าง image ด้วย docker build (ดูได้จาก Dockerfile นะ)
```docker build -t xampp-v2 .
```
2. เมื่อสร้างสำเร็จแล้ว จะทำการ run โดยใช้คำสั่ง
```docker run --rm --name myXampp -p 41061:22 -p 41062:80 -v ~/my_web_pages:/www xampp-v2
```
>
อธิบาย
>
rm จะทำการลบ container ทิ้งเมื่อทำการใช้ docker stop (หยุดการทำงาน)
>
name คือ การตั้งชื่อให้ container
>
p คือ การ expose port โดย [41061:22] -> [host:container]
>
v คือ การ ทำ volumn บนเครื่อง host โดย [~/my_web_pages:/www] -> [ที่อยู่บน host:แมพไปที่ container]
>
3. หากต้องการหยูดการทำงาน ให้ใช้คำสั่ง docker stop

ซึ่งทางผู้พัฒนา ได้ทำการ push ลง docker hub ให้แล้ว สามารถ ดูเพิ่มเติมได้ที่ ![xampp-dockerhub](https://hub.docker.com/r/kawhao/xampp-v2)

# file
- ex2: index.php , buycherry.php, empdata.php, report.php

# Demo
start at index.php <br>
![buycherry.png](https://cdn.discordapp.com/attachments/1067458504014708767/1071232824327282808/image.png)
![verify_buy.png](https://cdn.discordapp.com/attachments/1067458504014708767/1071232824583131186/image.png)
![empdata.png](https://cdn.discordapp.com/attachments/1067458504014708767/1071232824893513848/image.png)
![verify_emp.png](https://cdn.discordapp.com/attachments/1067458504014708767/1071232825220665415/image.png)
![report.png](https://cdn.discordapp.com/attachments/1067458504014708767/1071232825526861904/image.png)
