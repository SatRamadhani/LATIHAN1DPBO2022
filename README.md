# LATIHAN1DPBO2022
### Saya [Muhammad Satria Ramadhani - 2005128] mengerjakan evaluasi [Latihan Praktikum 01] dalam mata kuliah [Desain dan Pemrograman Berorientasi Objek] untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Pendahuluan

Untuk bagian B terdapat dua kelas, yaitu:
- **Team**
- **Table** (dalam kode PHP dinamakan **Output** karena adanya konflik dengan XAMPP).

Class "Team" memiliki empat atribut, dengan keterangan:
- **name** -- Nama Tim, berupa *string*.
- **country** -- Asal Negara, berupa *string*.
- **year** -- Tahun Didirikan, berupa *integer*.
- **player** -- Daftar Pemain, berupa *array/list/vector of string*.

Sementara itu, class "Table" memiliki tiga atribut, dengan keterangan:
- **row** - Baris Tabel, berupa *integer*.
- **col** - Kolom Tabel, berupa *integer*.
- **length** - Panjang Tabel, berupa *integer*.

Masing-masing atribut mempunyai *Getter* dan *Setter*-nya tersendiri, dengan dua tambahan:
- Jumlah digit pada year.
- Total data pada player.

## Alur Program

**Semua program mempunyai alur yang sama, kecuali PHP karena tidak adanya mekanisme *input* murni.**

Pertama-tama, pengguna akan dimintai jumlah tim yang ada. Kemudian dengan bentuk *array of object* dari class Team, pengguna akan memasukkan data nama tim, asal negara, tahun didirkan, jumlah pemain, dan nama-nama pemain. Setiap kali masukan, program akan memeriksa apakah atribut tersebut merupakan yang terpanjang atau bukan. Setelah proses masukan selesai, objek Team beserta data atribut terpanjang akan dijadikan argumen untuk data Table.

Di dalam objek Table sendiri, panjang dari tabel akan dihitung berdasarkan jumlah seluruh atribut terpanjang. Pembatas tabel dikeluarkan berdasarkan panjang tabel, diikuti tabel inti yang mengambil data-data dari parameter objek Team. Perhitungan atribut terpanjang dan keluaran pembatas tabel dibuat *private* karena hanya bisa digunakan di dalam pembuatan tabel itu sendiri.

## Hasil Program

**Program A - PHP**

![Program A - PHP](https://user-images.githubusercontent.com/72297396/153882644-ba57e6b8-ac23-4ee5-b607-267abaff32a1.png)

**Program B - C++, Java, Python**

![Program B - C++, Java, Python](https://user-images.githubusercontent.com/72297396/153882734-746a7924-b7c8-41c6-bb89-73685791316b.png)

**Program B - PHP**

![Program B - PHP](https://user-images.githubusercontent.com/72297396/153882806-70c6b820-b09e-4aeb-9ca2-1c8267be8fe4.png)
