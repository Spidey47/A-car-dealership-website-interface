
import 'package:first/ui/util/hexcolor.dart';
import 'package:flutter/material.dart';



class ScaffoldExample extends StatelessWidget{



  _tapButton(){
    debugPrint("tapped button");
  }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title:Text("scaffold"),
        centerTitle: true,
        backgroundColor: Colors.amberAccent.shade700,
        actions: [
          IconButton(onPressed: () => debugPrint("email tapped"), icon: Icon(Icons.email)),
          IconButton(onPressed: _tapButton, icon: Icon(Icons.access_alarms))
        ],
      ),

      floatingActionButton: FloatingActionButton(
        backgroundColor: Colors.lightGreenAccent,
        child: Icon(Icons.call_missed),
        onPressed: ()=> debugPrint("hello")),
      bottomNavigationBar: BottomNavigationBar(items: [
        BottomNavigationBarItem(icon: Icon(Icons.account_circle),label: ("first")),
        BottomNavigationBarItem(icon: Icon(Icons.ac_unit),label: ("second")),
        BottomNavigationBarItem(icon: Icon(Icons.access_alarm),label: ("third"))
      ],onTap: (int index)=> debugPrint("tapped item: $index"),),
      backgroundColor: Colors.redAccent.shade100,
      body: Container(
        alignment: Alignment.center,
        child:Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            CustomButton()

            // InkWell(
            //   child: Text("tap me",
            //    style: TextStyle(fontSize: 23.4),),
            //   onTap: () => debugPrint("tapped"),
            //
            //
            // )



          ],
        ),
      ),
    );
  }
}


class CustomButton extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: () {
        final snackBar = SnackBar(content: Text("hello"),
        backgroundColor: Colors.amberAccent.shade700,);
        ScaffoldMessenger.of(context).showSnackBar(snackBar);
      },

    child: Container(
      padding: EdgeInsets.all(10.0),
      decoration: BoxDecoration(
        color:Colors.pinkAccent,
        borderRadius: BorderRadius.circular(8.0)
      ),
      child: Text("button"),
    ),

    );
  }
}



class Home extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Material(
      color:Colors.deepOrange,
      child: Center(
          child: Text(
              "hello flutter",
              textDirection: TextDirection.ltr,
              style:TextStyle(
                  fontWeight: FontWeight.w500,
                  fontSize: 23.4,
                  fontStyle: FontStyle.italic
              )
          )),
    );

    // return Center(
    //   child:Text("hello flutter",textDirection: TextDirection.ltr,),
    // );
  }
}