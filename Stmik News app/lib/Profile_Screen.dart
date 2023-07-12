import 'package:flutter/material.dart';
import 'package:newsapp/Login_Page.dart';
import 'bottombar2.dart';

class ProfileScreen2 extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        width: MediaQuery.of(context).size.width, // Gunakan lebar layar penuh
        height:
            MediaQuery.of(context).size.height, // Gunakan tinggi layar penuh
        decoration: BoxDecoration(
          color: Color.fromRGBO(190, 210, 240, 1),
        ),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            SizedBox(height: 40), // Spasi atas
            CircleAvatar(
              radius: 70,
              backgroundImage: AssetImage('assets/images/news6.jpg'),
            ),
            SizedBox(height: 20), // Spasi antara avatar dan teks
            Text(
              'Rofik Adam Nugraha',
              style: TextStyle(
                color: Color.fromRGBO(0, 0, 0, 1),
                fontFamily: 'Inter',
                fontSize: 20,
                fontWeight: FontWeight.normal,
              ),
            ),
            SizedBox(height: 20), // Spasi antara teks dan tombol
            ElevatedButton(
              onPressed: () {
                // Aksi tombol
              },
              child: Text('Edit Profile'),
            ),
            SizedBox(height: 20), // Spasi antara tombol dan teks lainnya
            Text(
              '1,354 Likes News',
              style: TextStyle(
                color: Color.fromRGBO(0, 0, 0, 1),
                fontFamily: 'Inter',
                fontSize: 14,
                fontWeight: FontWeight.normal,
              ),
            ),
            Text(
              '21 Artikel',
              style: TextStyle(
                color: Color.fromRGBO(0, 0, 0, 1),
                fontFamily: 'Inter',
                fontSize: 14,
                fontWeight: FontWeight.normal,
              ),
            ),
            SizedBox(
                height:
                    20), // Spasi antara teks "21 Artikel" dan kontainer baru
            Container(
              width: 282,
              height: 194,
              child: Stack(
                children: <Widget>[
                  Positioned(
                    top: 0,
                    left: 0,
                    child: Container(
                      width: 282,
                      height: 194,
                      decoration: BoxDecoration(
                        borderRadius: BorderRadius.only(
                          topLeft: Radius.circular(10),
                          topRight: Radius.circular(10),
                          bottomLeft: Radius.circular(10),
                          bottomRight: Radius.circular(10),
                        ),
                        color: Color.fromRGBO(252, 252, 252, 1),
                      ),
                    ),
                  ),
                  Positioned(
                    top: 130,
                    left: 69,
                    child: Text(
                      'Setting profile',
                      textAlign: TextAlign.left,
                      style: TextStyle(
                        color: Color.fromRGBO(0, 0, 0, 1),
                        fontFamily: 'Inter',
                        fontSize: 12,
                        fontWeight: FontWeight.normal,
                        height: 1,
                      ),
                    ),
                  ),
                  Positioned(
                    top: 61,
                    left: 71,
                    child: Text(
                      'Write Article',
                      textAlign: TextAlign.left,
                      style: TextStyle(
                        color: Color.fromRGBO(0, 0, 0, 1),
                        fontFamily: 'Inter',
                        fontSize: 12,
                        fontWeight: FontWeight.normal,
                        height: 1,
                      ),
                    ),
                  ),
                  Positioned(
                    top: 96,
                    left: 69,
                    child: Text(
                      'Receive Article',
                      textAlign: TextAlign.left,
                      style: TextStyle(
                        color: Color.fromRGBO(0, 0, 0, 1),
                        fontFamily: 'Inter',
                        fontSize: 12,
                        fontWeight: FontWeight.normal,
                        height: 1,
                      ),
                    ),
                  ),
                  Positioned(
                    top: 121,
                    left: 31,
                    child: Text(""),
                  ),
                  Positioned(
                    top: 93,
                    left: 37,
                    child: Text(""),
                  ),
                  Positioned(
                    top: 57,
                    left: 33,
                    child: Text(""),
                  ),
                  Positioned(
                    top: 10,
                    left: 85,
                    child: Text(
                      'Profile',
                      textAlign: TextAlign.center,
                      style: TextStyle(
                        color: Color.fromRGBO(0, 0, 0, 1),
                        fontFamily: 'Inter',
                        fontSize: 16,
                        fontWeight: FontWeight.normal,
                        height: 1,
                      ),
                    ),
                  ),
                  Positioned(
                    top: 156,
                    left: 33,
                    child: Container(
                      width: 167,
                      height: 24,
                      child: Stack(
                        children: <Widget>[
                          Positioned(
                            top: 4,
                            left: 38,
                            child: Text(
                              'Log Out',
                              textAlign: TextAlign.left,
                              style: TextStyle(
                                color: Color.fromRGBO(0, 0, 0, 1),
                                fontFamily: 'Inter',
                                fontSize: 12,
                                fontWeight: FontWeight.normal,
                                height: 1,
                              ),
                            ),
                          ),
                          Positioned(
                            top: 0,
                            left: 0,
                            child: Text(""),
                          ),
                        ],
                      ),
                    ),
                  ),
                ],
              ),
            ),
            Spacer(), // Untuk mengisi ruang kosong di bawah
            ElevatedButton(
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => Homepage()),
                );
                // Aksi tombol logout
              },
              child: Text('Logout'),
            ),
            SizedBox(height: 40), // Spasi bawah
          ],
        ),
      ),
      bottomNavigationBar: Appbar2(),
    );
  }
}
