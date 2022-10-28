USE dataKampus;

CREATE TABLE tbl_mhs(
id_mhs char(11) PRIMARY KEY,
id_prodi int NOT NULL,
nama_mhs varchar(100) NOT NULL,
alamat_mhs text NOT NULL
);

CREATE TABLE tbl_prodi(
id_prodi INT PRIMARY KEY,
nama_prodi varchar(100) NOT NULL,
ket_prodi varchar(20)
);

INSERT INTO tbl_prodi(id_prodi,nama_prodi,ket_prodi) VALUES
(1,"Teknik Informatika","aktif"),
(2,"Sistem Informasi","aktif");

INSERT INTO tbl_mhs(id_mhs,id_prodi,nama_mhs,alamat_mhs) VALUES
("21041110085",1,"Bima Satria","Surakarta"),
("21041110087",1,"Alexandra Collins","Semarang"),
("21044110021",2 ,"James Leo","Surabaya"),
("21044110050",2 ,"Jessica","Pamekasan"),
("21044110090",2 ,"Alexander","Sumenep"),
("21041110066",1 ,"Steve Leo","Surabaya");
