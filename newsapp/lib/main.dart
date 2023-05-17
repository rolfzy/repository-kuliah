import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/material.dart';
import 'package:newsapp/SplashScreen.dart';

// ignore: unused_import
import 'app_constant.dart';

main() async {
  WidgetsFlutterBinding.ensureInitialized();

  await Firebase.initializeApp(
    name: AppConstant.firebaseName,
    options: const FirebaseOptions(
      apiKey: AppConstant.firebaseApiKey,
      appId: AppConstant.firebaseAppId,
      messagingSenderId: "192557374671",
      projectId: "myapp-9ef2f",
    ),
  );

  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Stimik NEWS APP',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: const SplashScreen(),
    );
  }
}
