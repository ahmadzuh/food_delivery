import 'dart:async';

import 'package:flutter/material.dart';
import 'package:food_delivery_f/environment/environment.dart';
import 'package:food_delivery_f/home/main_navigation.dart';

class SplashScreen extends StatefulWidget {
  @override
  _SplashScreenState createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {
  @override
  void initState() {
    startTime();
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      body: Stack(
        fit: StackFit.expand,
        children: [
          Column(
            mainAxisAlignment: MainAxisAlignment.end,
            mainAxisSize: MainAxisSize.min,
            children: [
              Padding(
                padding: EdgeInsets.only(bottom: 30.0),
                child: Text(
                  '@Copyright Food Delivery',
                  style: TextStyle(
                    color: Colors.black,
                    fontSize: 11.0,
                  ),
                ),
              )
            ],
          ),
          Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Image.asset('${Environment.imageAssets}logo.png',
                  width: 120.0, height: 120.0),
              SizedBox(height: 20.0),
              Text('Pesan apapun jadi lebih mudah')
            ],
          )
        ],
      ),
    );
  }

  startTime() async {
    var _duration = Duration(seconds: 3);
    return Timer(_duration, navigationPage);
  }

  navigationPage() {
    Navigator.pushAndRemoveUntil(
        context,
        MaterialPageRoute(builder: (BuildContext context) => MainNavigation()),
        (route) => false);
  }
}
