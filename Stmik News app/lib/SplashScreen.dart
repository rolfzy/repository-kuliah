import 'package:flutter/material.dart';
import 'package:newsapp/SplashScreen.dart';
import 'package:newsapp/Login_Page.dart';

class SplashScreen extends StatefulWidget {
  const SplashScreen({Key? key}) : super(key: key);

  @override
  State<SplashScreen> createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {
  @override
  void initState() {
    gotoLogin();
    super.initState();
  }

  gotoLogin() {
    Future.delayed(const Duration(seconds: 3)).then(
      (value) => Navigator.push(
        context,
        MaterialPageRoute(builder: (context) => const LoginScreen()),
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        color: Colors.lightBlue,
        child: const Center(
          child: Text(
            "Stimik APPS 📰",
            style: TextStyle(
                fontStyle: FontStyle.italic,
                fontWeight: FontWeight.bold,
                fontSize: 50,
                color: Colors.white),
          ),
        ),
      ),
    );
  }
}
