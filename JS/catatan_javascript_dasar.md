# Catatan Pembelajaran JavaScript Dasar

---

## 1. Pengenalan & Output Dasar

### Hello World (`hello.html`, `hellow.html`, `hellow.js`)
- Menggunakan `console.log()` untuk mencetak data ke konsol browser (F12).
- Menggunakan `document.writeln()` untuk menampilkan teks langsung ke halaman HTML.
- JavaScript bisa ditulis langsung di dalam tag `<script>` HTML atau dipisah dalam file eksternal `.js`.

### Console (`console.html`)
- Tempat untuk memantau pesan, debugging, dan pesan error dari kode JavaScript.
- Contoh:
  - `console.log("Pesan umum")`
  - `console.info("Informasi")`
  - `console.warn("Peringatan")`
  - `console.error("Pesan Error")`

---

## 2. Variabel & Tipe Data

### Variabel (`variable.html`)
- Tempat menyimpan data yang bisa dipanggil kembali.
- `let`: Nilai nilainya bisa diubah (*re-assign*).
- `const`: Nilai nilainya tetap (*konstan*), tidak bisa diubah setelah diisi.
- `var`: Cara lama (sebaiknya dihindari karena masalah *scope*).

### Tipe Data Primitif (`tipe-data.html`)
- **Number**: Angka (contoh: `100`, `3.14`).
- **String**: Teks diapit kutip (contoh: `"Hello"`, `'JavaScript'`).
- **Boolean**: Nilai kebenaran (`true` atau `false`).

### Undefined & Null (`undifined-null.html`)
- **Undefined**: Variabel sudah dibuat/dideklarasikan, tetapi belum diisi nilai apapun.
- **Null**: Variabel yang sengaja diisi nilai kosong (*kosong bernilai*).

### Typeof (`typeof.html`)
- Operator untuk mengecek tipe data dari suatu variabel.
- Contoh: `typeof "Halo"` mengembalikan `"string"`.

### Konversi Tipe Data (`konversi.html`)
- Mengubah tipe data satu ke tipe data lainnya.
- `parseInt("123")`: Mengubah string menjadi angka bulat.
- `parseFloat("3.14")`: Mengubah string menjadi angka desimal.
- `Number("123")`: Mengubah ke angka secara umum.
- `String(123)` / `(123).toString()`: Mengubah angka menjadi string.

---

## 3. Tipe Data Kompleks

### Array (`array.html`)
- Tempat menyimpan kumpulan data secara berurutan menggunakan indeks (dimulai dari 0).
- Contoh:
  ```javascript
  const buah = ["Apel", "Jeruk", "Mangga"];
  console.log(buah[0]); // Apel
  ```

### Object (`data-object.html`)
- Tempat menyimpan data dalam bentuk pasangan **Key (Property)** dan **Value**.
- Contoh:
  ```javascript
  const orang = {
    nama: "Rendy",
    umur: 20
  };
  console.log(orang.nama); // Rendy
  ```

---

## 4. Operator

### Matematika (`oprasi-mtk.html`)
- Penjumlahan (`+`), Pengurangan (`-`), Perkalian (`*`), Pembagian (`/`), Sisa Bagi (`%`).

### Augmented Assignment (`Oprasi-Augmented-Assi.html`)
- Disingkat untuk operasi matematika dengan variabel itu sendiri.
- Contoh: `x += 5` (sama dengan `x = x + 5`).

### Unary (`oprator-unary.html`)
- Operator yang membutuhkan 1 operand saja.
- `x++` (increment): Menambah 1.
- `x--` (decrement): Mengurang 1.
- `+x`: Konversi ke positif.
- `-x`: Konversi ke negatif.

### Perbandingan (`operator-perbandingan.html`)
- Membandingkan 2 nilai dan menghasilkan boolean (`true`/`false`).
- `>`, `<`, `>=`, `<=`.
- `==` (Sama nilai, abaikan tipe data).
- `===` (Sama nilai DAN sama tipe data - *Direkomendasikan*).
- `!=` dan `!==`.

### Logika (`operator-logika.html`)
- `&&` (AND): Bernilai `true` jika semua kondisi benar.
- `||` (OR): Bernilai `true` jika salah satu kondisi benar.
- `!` (NOT): Membalikkan nilai boolean (`!true` jadi `false`).

---

## 5. String & Interaksi Pengguna

### String Template (`string-template.html`)
- Cara menggabungkan string dan variabel menggunakan *backtick* (``` `` ```) dan `${variabel}`.
- Contoh:
  ```javascript
  const nama = "Rendy";
  console.log(`Halo nama saya ${nama}`);
  ```

### Popup Input/Alert (`popup.html`)
- `alert("Pesan")`: Menampilkan dialog peringatan.
- `prompt("Masukkan nama:")`: Menampilkan dialog input teks dari pengguna.
- `confirm("Apakah kamu yakin?")`: Menampilkan dialog konfirmasi OK (`true`) / Cancel (`false`).

---

## 6. Pengondisian (Conditional)

### If / Else If / Else (`if.html`)
- Percabangan kode berdasarkan kondisi boolean.
- Contoh:
  ```javascript
  if (nilai >= 75) {
    console.log("Lulus");
  } else {
    console.log("Tidak Lulus");
  }
  ```

### Switch Statement (`switch.html`)
- Percabangan kode untuk mengecek satu variabel dengan banyak nilai pasti (*case*).
- Cocok menggantikan `if-else` yang terlalu banyak.

### Ternary Operator (`ternary-op.html`)
- Singkatan dari `if-else` sederhana dalam 1 baris kode.
- Format: `kondisi ? jika_true : jika_false`
- Contoh:
  ```javascript
  const hasil = nilai >= 75 ? "Lulus" : "Tidak Lulus";
  ```

---

## 7. Concept & Operator Khusus JavaScript

### Truthy dan Falsy (`Falsy-Truthy.html`)
- **Falsy**: Nilai yang ketika dikonversi ke Boolean akan bernilai `false`.
  Ada 7 nilai **Falsy** di JavaScript:
  1. `false`
  2. `0` dan `-0`
  3. `""` (string kosong)
  4. `null`
  5. `undefined`
  6. `NaN` (Not a Number)
  7. `0n` (BigInt zero)
- **Truthy**: Semua nilai selain dari 7 nilai Falsy di atas dikategorikan sebagai `true` (termasuk string berisi `"0"`, `"false"`, array kosong `[]`, dan object kosong `{}`).

### Operator IN (`in.html`)
- Mengecek apakah sebuah **property/key** ada di dalam suatu Object atau Array.
- Contoh:
  ```javascript
  const user = { nama: "Rendy" };
  console.log("nama" in user); // true
  console.log("umur" in user); // false
  ```

### Nullish Coalescing Operator (`Nullisth-Operator.html`)
- Menggunakan sintaks `??`.
- Memberikan nilai *default* HANYA jika variabel bernilai `null` atau `undefined` (berbeda dari `||` yang juga mengecek nilai falsy lain seperti `0` atau `""`).
- Contoh:
  ```javascript
  let nama;
  let hasil = nama ?? "Tamu"; // "Tamu"
  ```

### Optional Chaining (`optional-chaining.html`)
- Menggunakan sintaks `?.`.
- Digunakan untuk mengakses property dari objek bersarang (*nested object*) tanpa memicu error jika property di tengahnya bernilai `null` atau `undefined`.
- Contoh:
  ```javascript
  const mobil = { unit: { merk: "Toyota" } };
  console.log(mobil?.unit?.merk); // "Toyota"
  console.log(mobil?.pemilik?.nama); // undefined (tanpa error)
  ```
