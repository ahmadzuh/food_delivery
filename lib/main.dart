import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:food_delivery_f/screen/splash_screen.dart';

void main() {
  runApp(MainApp());
}

class MainApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    SystemChrome.setPreferredOrientations([
      DeviceOrientation.portraitUp,
      DeviceOrientation.portraitDown,
    ]);

    return MaterialApp(
      debugShowCheckedModeBanner: true,
      title: 'Food Delivery',
      theme: ThemeData(
        textTheme:
            Theme.of(context).textTheme.apply(bodyColor: Color(0XFF535353)),
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: SplashScreen(),
    );
  }
}
