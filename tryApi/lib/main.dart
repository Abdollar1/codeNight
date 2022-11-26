
import 'dart:io';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
void main() {
  runApp(const MyApp());
}

class MyApp extends StatefulWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  double wid = 3;
  List data = [];
  void getApi() async{
   
    const baseurl = "https://staging.afcfta.app/";
    const token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxMDI2NDc4MTc0MCwianRpIjoiNTM4ZWY0ZmUwYmFmNGY3ZWI1ZWY0NDFiNDQzNWVlYjYiLCJ1c2VyX2lkIjo0fQ.arlXDwDbH5bibGTpKN8NFFbcbaYo1N_-KuhfjW0RZhk';
    http.Response response = await http.get(Uri.parse(baseurl + "api/inventory/category/list/1/"),
    headers:{HttpHeaders.authorizationHeader:token});

    if(response.statusCode <206){
      print(json.decode(response.body)['categories']);
      setState(() {
         data = json.decode(response.body)['categories'];
      });
    }
    else {
      print(response.body);
    }
  }
  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    getApi();
  }
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: SafeArea(
        child: Scaffold(
          body: Container(
           child: Column(
             children: [
               for(var cat in data)
                 Padding(padding: EdgeInsets.all(10.0),
                 child: Row(
                   children: [
                     Text('${cat["category_name"]}'),
                     SizedBox(width:wid),
                     Text('${cat["id"]}'),
                     SizedBox(width: wid),
                     Text('${cat["entity"]["name"]}'),
                     SizedBox(width: wid),
                     Text('${cat["entity"]["market_name"]}'),
                   ],
                 ),
                 ),
             ],
            ),
         ),
        ),
      ),
    );
  }
}
