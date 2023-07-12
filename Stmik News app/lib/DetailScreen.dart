import 'package:flutter/material.dart';
import 'package:newsapp/HomeScreen.dart';

class NewsDetailScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      appBar: AppBar(
        leading: IconButton(
          icon: Icon(Icons.arrow_back),
          onPressed: () {
            Navigator.push(
              context,
              MaterialPageRoute(builder: (context) => ProfileScreen()),
            );
          },
        ),
        title: Text('News Detail'),
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Container(
              height: 300,
              decoration: BoxDecoration(
                borderRadius: BorderRadius.only(
                  bottomLeft: Radius.circular(30),
                  bottomRight: Radius.circular(30),
                ),
                image: DecorationImage(
                  image: AssetImage('assets/images/news5.jpg'),
                  fit: BoxFit.cover,
                ),
              ),
            ),
            SizedBox(height: 24),
            Padding(
              padding: EdgeInsets.symmetric(horizontal: 24),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text(
                    'Pengumuman Pendaftaran Mahasiswa Baru',
                    style: TextStyle(
                      color: Colors.black,
                      fontSize: 24,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  SizedBox(height: 8),
                  Text(
                    'By Rofik Adam',
                    style: TextStyle(
                      color: Colors.grey,
                      fontSize: 16,
                    ),
                  ),
                  SizedBox(height: 24),
                  Text(
                    'Gratis Kuliah, Beasiswa 100%',
                    style: TextStyle(
                      color: Colors.black,
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  SizedBox(height: 16),
                  Text(
                    'Kampus STMIK “AMIKBANDUNG” membuka peluang calon mahasiswa yang ingin berkuliah dan mendapatkan beasiswa gratis 100% bahkan bantuan biaya hidup untuk kuliah. Penasarankan seperti apa persyaratan nya tetap stay tune di website official Kampus STMIK “AMIKBANDUNG” ya…',
                    style: TextStyle(
                      color: Colors.grey,
                      fontSize: 16,
                    ),
                  ),
                  SizedBox(height: 16),
                  Text(
                    'Kuota Beasiswa ini terbatas lohh. Ayo segera daftarkan dirimu untuk menjadi ahli IT dan Animator hanya di STMIK “AMIKBANDUNG”info lebih lanjut dapat menghubungi: 0811-239-1136 (Official Kampus)',
                    style: TextStyle(
                      color: Colors.grey,
                      fontSize: 16,
                    ),
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
