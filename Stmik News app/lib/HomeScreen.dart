import 'package:flutter/material.dart';
import 'bottombar2.dart';
import 'DetailScreen.dart';

class ProfileScreen extends StatefulWidget {
  const ProfileScreen({Key? key}) : super(key: key);

  @override
  _ProfileScreenState createState() => _ProfileScreenState();
}

class _ProfileScreenState extends State<ProfileScreen>
    with TickerProviderStateMixin {
  late TabController _tabController;

  void navigateToNewsDetail() {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => NewsDetailScreen()),
    );
  }

  @override
  void initState() {
    super.initState();
    _tabController = TabController(length: 2, vsync: this);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromRGBO(190, 210, 240, 1),
      appBar: PreferredSize(
        preferredSize: Size.fromHeight(56),
        child: AppBar(
          backgroundColor: Colors.transparent,
          elevation: 0,
          flexibleSpace: Container(
            padding: EdgeInsets.symmetric(horizontal: 16),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    Text(
                      'Good morning',
                      style: TextStyle(
                        color: Color.fromRGBO(148, 165, 170, 1),
                        fontFamily: 'Mulish',
                        fontSize: 14,
                        letterSpacing: 0,
                        fontWeight: FontWeight.normal,
                        height: 1.5,
                      ),
                    ),
                    SizedBox(height: 4),
                    Text(
                      'Rofik Adam N',
                      style: TextStyle(
                        color: Color.fromRGBO(26, 67, 78, 1),
                        fontFamily: 'Mulish',
                        fontSize: 19,
                        letterSpacing: 0,
                        fontWeight: FontWeight.normal,
                        height: 1.5,
                      ),
                    ),
                  ],
                ),
                Container(
                  width: 44,
                  height: 44,
                  decoration: BoxDecoration(
                    border: Border.all(
                      color: Color.fromRGBO(241, 241, 241, 1),
                      width: 1,
                    ),
                    borderRadius: BorderRadius.all(Radius.circular(22)),
                  ),
                  child: Icon(
                    Icons.person,
                    color: Color.fromRGBO(241, 241, 241, 1),
                    size: 24,
                  ),
                ),
              ],
            ),
          ),
        ),
      ),
      body: TabBarView(
        controller: _tabController,
        children: [
          ListView(
            children: <Widget>[
              GestureDetector(
                onTap: () {
                  navigateToNewsDetail();
                },
                child: NewsItem(
                  title: 'Pengumuman Pendaftaran Mahasiswa Baru',
                  date: '10 Juni 2023',
                  imageAsset: 'assets/images/news1.png',
                ),
              ),
              NewsItem(
                title: 'Peringatan Dies Natalis ke-25 Kampus STMIK',
                date: '15 Juli 2023',
                imageAsset: 'assets/images/news2.png',
              ),
              NewsItem(
                title: 'Seminar Nasional "Inovasi Teknologi Terkini"',
                date: '20 Agustus 2023',
                imageAsset: 'assets/images/news3.png',
              ),
              NewsItem(
                title: 'Beasiswa Stmik 2023',
                date: '07 juli 2023',
                imageAsset: 'assets/images/news4.png',
              ),
            ],
          ),

          // Add another TabBarView child for Events
          Container(
            child: Center(
              child: Text('Events'),
            ),
          ),
        ],
      ),
      bottomNavigationBar: Appbar2(),
    );
  }
}

class NewsItem extends StatelessWidget {
  final String title;
  final String date;
  final String imageAsset;

  const NewsItem({
    required this.title,
    required this.date,
    required this.imageAsset,
  });

  @override
  Widget build(BuildContext context) {
    return InkWell(
      onTap: () {
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => NewsDetailScreen()),
        );
      },
      child: Card(
        margin: EdgeInsets.all(8),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            Image.asset(
              imageAsset,
              width: double.infinity,
              height: 200,
              fit: BoxFit.cover,
            ),
            Padding(
              padding: EdgeInsets.all(8),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: <Widget>[
                  Text(
                    title,
                    style: TextStyle(
                      fontSize: 18,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  SizedBox(height: 4),
                  Text(
                    date,
                    style: TextStyle(
                      fontSize: 12,
                      color: Colors.grey,
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
