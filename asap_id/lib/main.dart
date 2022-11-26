import 'package:flutter/material.dart';

void main() => runApp(MaterialApp(
 home: Home(),

));

class Home extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[850],
      appBar: AppBar(
        title: Text('Asap Id'),
        centerTitle: true,
        backgroundColor: Colors.grey[800],
        elevation: 8.0,
      ),
      body: Padding(
        padding: EdgeInsets.fromLTRB(30.0, 40.0, 30.0, 0.0),
       child: Column(
         crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
                 // Spacer(),
            Center(
            child: CircleAvatar(
              backgroundColor: Colors.white,
              backgroundImage: AssetImage('assets/tx.jpg'),
              radius: 60.0,
              ),
          ),
            Divider(
              height: 60.0,
              color: Colors.white,
            ),
            Text('Client Name:',
            style: TextStyle(
              color: Colors.amber,
              fontWeight: FontWeight.bold,
              fontSize: 28.0,
              letterSpacing: 0.6,
            ),
            ),
            SizedBox(height: 30.0),
            // Spacer(),
            Text('Amasap Dasty',
              style: TextStyle(
                color: Colors.white,
                fontWeight: FontWeight.bold,
                fontSize: 20.0,
                letterSpacing: 1.0,
              ),
            ),
            SizedBox(height: 30.0),
            Text('Current Position:',
              style: TextStyle(
                color: Colors.amber,
                fontWeight: FontWeight.bold,
                fontSize: 28.0,
                letterSpacing: 0.6,
              ),
            ),
            SizedBox(height: 30.0),
            Text('Manager',
              style: TextStyle(
                color: Colors.white,
                fontWeight: FontWeight.bold,
                fontSize: 20.0,
                letterSpacing: 1.0,
              ),
            ),
            SizedBox(height: 30),
            Text('Email:',
              style: TextStyle(
                color: Colors.amber,
                fontWeight: FontWeight.bold,
                fontSize: 28.0,
                letterSpacing: 1.0,
              ),
            ),
            SizedBox(height: 30),
            Row(

              children: [
                Icon(
                  Icons.email,
                  color: Colors.grey[400],
                ),
                SizedBox(width: 10.0),
                Text('abdollahsuper@gmail.com',
                  style: TextStyle(
                    color: Colors.white,
                    fontWeight: FontWeight.bold,
                    fontSize: 23.0,
                    letterSpacing: 1.0,
                  ),
                ),
              ],
            ),

      ],
      ),
      ),
    );
  }
}

