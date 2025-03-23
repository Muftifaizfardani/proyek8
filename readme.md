# KICAUW - Client

Repo berikut bertujuan untuk mengatur landing page dari website kicauw.com, termasuk halaman dashboard / manage bagi pengunjung. 

## Engine dan Template ##

- [Framework Laravel 5.4](https://laravel.com/docs/5.4).
- [Template AdminLTE 2.4.0](https://adminlte.io/themes/AdminLTE/).

## Feature ##

Fitur dari repo berikut terbagi menjadi beberapa bagian seperti :

### Landing Page ###

- Login
- Register ( email | handphone )

### Manage - Agent ###

Pada bagian agent, client bisa menambah agent dan cukup memasukkan nama dan password login. Untuk email login akan otomatis digenerate dengan rumus : **email_agent = slug(nama_agent)@handphone_client.wa**

- Tambah Agent
- Edit Agent
- Delete Agent

### Manage - Chat ###

Pada bagian chat, client dan agent bisa menggunakan fitur berikut sesuai key yang digenerate pada fungsi di file helper/chat dengan key yang dimasukkan pada ekstensi chrome.

- Sync Contact
- Read Message Text
- Read Message Image
- Read Message Emoji
- Send Message Text

## Bug dan Tambahan Fitur ##

Jika ingin menambahkan fitur atau mengetahui akan adanya bug pada aplikasi disisi client, segera buat issue baru dengan tag '[BUG]' atau '[FITUR]'.
