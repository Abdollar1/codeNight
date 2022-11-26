import 'dart:math';

import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}
class MyApp extends StatefulWidget {

  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  List<String>restaurant = [
  'Pick Restaurant',
  'McDonald \'s',
  'Roscoe\'s Chicken \& waffles',
  'Olive Garden',
  'Pizza Hut',
  'Panda Express',
  'Subway fast Food',
  'Adiza\'s Special Waakye',
];

late int counter =0 ;
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar:
        AppBar(
          backgroundColor: Colors.purple,
          centerTitle: true,
          elevation: 0.2,
          title:Text('PICK \& EAT', style:TextStyle(
              fontWeight: FontWeight.bold, fontSize: 20),
            textAlign: TextAlign.center,),
        ),

        body: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Text('Have you eaten Today?', style:
              TextStyle(fontWeight: FontWeight.bold, fontSize: 20.0),),

                 //Text(restaurant[counter],  style: TextStyle(fontSize: 30.0),),
              if(counter != 0)
              Column(
                children: [
                  Padding(
                    padding: const EdgeInsets.only(top: 20.0),
                    child: Text(restaurant[counter],  style: TextStyle(fontSize: 30.0),),
                  ),
                ],
              ),
          SizedBox(height: 10.0),
               ElevatedButton(
                 onPressed: (){pickMe();},
                 child: Text(
                 'Pick Restaurant', style:
               TextStyle(color: Colors.white, fontSize: 15.0),),)
            ],
          ),
        ),
      ),
    );
  }
  void pickMe(){
    final random = Random();
    final index = random.nextInt(restaurant.length);
    setState(() {
      counter = index;
    });
  }
}
