# Php by Kamiiyaru

##IMPORTANT!!
(en)
database name **SHOULD** be login_user or if you want to change it, change all the db name variable in connect.php or other php file. Table name **SHOULD** be user or change all the table name by yourself. If you not follow it I ain't got no responsible if the code not work 

(id)
nama database **HARUS** bernama login_user atau kalau mau diganti, ganti semua db variable di connect.php atau file php lain. Nama table juga **HARUS** bernama user atau kalau mau diganti ganti sendiri. Kalo gak ngikutin gua ngak bertanggung jawab kalo ngak work

(en)
check if database or the table is exist or not

(id)
cek databasenya ato tablenya ada ato ngak

```sql
/*(en) if database not exist (id) kalo database gak ada*/
use login_user
/*result : ERROR 1049 (42000): Unknown database 'login'*/

/*(en) if database exist (id) kalo database ada*/
use login_user
/*result : Database changed*/
```