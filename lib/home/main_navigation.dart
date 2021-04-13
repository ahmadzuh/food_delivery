import 'package:flutter/material.dart';
import 'package:bmnav/bmnav.dart' as bmnav;

class MainNavigation extends StatefulWidget {
  @override
  _MainNavigationState createState() => _MainNavigationState();
}

class _MainNavigationState extends State<MainNavigation> {
  int _currentIndex;
  var page;

  @override
  void initState() {
    _currentIndex = 0;
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: page,
      bottomNavigationBar: bmnav.BottomNav(
        color: Colors.white,
        labelStyle: bmnav.LabelStyle(
            visible: true,
            showOnSelect: false,
            onSelectTextStyle: TextStyle(color: Colors.grey, height: 1.8),
            textStyle: TextStyle(color: Colors.grey, height: 1.8)),
        iconStyle: bmnav.IconStyle(
            color: Colors.grey[400], onSelectSize: 22.0, size: 22.0),
        elevation: 6.0,
        onTap: (i) {
          _currentIndex = i;
          _currentPage(i);
        },
        index: _currentIndex,
        
      ),
    );
  }
}

void _currentPage(int i) {}
