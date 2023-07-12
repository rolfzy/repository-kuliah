import 'package:flutter/material.dart';

class SaveNewsPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromRGBO(190, 210, 240, 1),
      appBar: AppBar(
        title: Text('Save News'),
      ),
      body: ListView.builder(
        itemCount: savedNewsList.length,
        itemBuilder: (context, index) {
          final savedNews = savedNewsList[index];
          return ListTile(
            leading: Image.asset(savedNews.image),
            title: Text(savedNews.title),
            subtitle: Text(savedNews.description),
            onTap: () {
              // Aksi saat berita di tap
              // Misalnya menampilkan detail berita
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => NewsDetailPage(savedNews),
                ),
              );
            },
          );
        },
      ),
    );
  }
}

class NewsDetailPage extends StatelessWidget {
  final SavedNews savedNews;

  NewsDetailPage(this.savedNews);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromRGBO(190, 210, 240, 1),
      appBar: AppBar(
        title: Text('News Detail'),
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Image.asset(savedNews.image),
            Padding(
              padding: EdgeInsets.all(16),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text(
                    savedNews.title,
                    style: TextStyle(
                      fontSize: 24,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  SizedBox(height: 8),
                  Text(
                    savedNews.description,
                    style: TextStyle(
                      fontSize: 16,
                      color: Colors.grey,
                    ),
                  ),
                  SizedBox(height: 16),
                  Text(
                    savedNews.content,
                    style: TextStyle(fontSize: 16),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class SavedNews {
  final String title;
  final String description;
  final String image;
  final String content;

  SavedNews(this.title, this.description, this.image, this.content);
}

// Contoh data berita yang disimpan
List<SavedNews> savedNewsList = [
  SavedNews(
    'Pengumuman Pendaftaran Mahasiswa Baru',
    'By Rofik Adam',
    'assets/images/news5.jpg',
    'Kampus STMIK “AMIKBANDUNG” membuka peluang calon mahasiswa yang ingin berkuliah dan mendapatkan beasiswa gratis 100% bahkan bantuan biaya hidup untuk kuliah. Penasarankan seperti apa persyaratan nya tetap stay tune di website official Kampus STMIK “AMIKBANDUNG” ya… Kuota Beasiswa ini terbatas lohh. Ayo segera daftarkan dirimu untuk menjadi ahli IT dan Animator hanya di STMIK “AMIKBANDUNG”info lebih lanjut dapat menghubungi: 0811-239-1136 (Official Kampus)',
  ),
  SavedNews(
    'Peringatan Dies Natalis ke-25 Kampus STMIK',
    'By Charlie',
    'assets/images/news2.png',
    'Pada tanggal 2 Juli 2023, Kampus STMIK (Sekolah Tinggi Manajemen Informatika dan Komputer) merayakan peringatan Dies Natalis ke-25 dengan semarak. Kampus yang terletak di pusat kota ini telah menjadi pusat pendidikan teknologi yang terkemuka selama seperempat abad terakhir.Acara peringatan dies natalis kali ini dihadiri oleh sejumlah tamu undangan, termasuk alumni, dosen, mahasiswa, serta stakeholder terkait dalam dunia pendidikan dan teknologi. ',
  ),
  SavedNews(
    'Seminar Nasional "Inovasi Teknologi Terkini"',
    'By Edward',
    'assets/images/news3.png',
    'Seminar Nasional "Inovasi Teknologi Terkini" berhasil mengumpulkan para pakar dan profesional teknologi terkemuka di Indonesia. Acara yang diadakan di pusat konvensi terkenal ini memberikan wawasan baru tentang tren terbaru dalam bidang teknologi yang sedang berkembang pesat.Peserta seminar juga dapat memperoleh pengetahuan tentang aplikasi teknologi terkini seperti kecerdasan buatan, blockchain, dan Internet of Things (IoT) yang dapat meningkatkan efisiensi dan produktivitas dalam berbagai sektor.',
  ),
];
