
import 'package:flutter/material.dart';





class Wisdom extends StatefulWidget {
  @override
  State<Wisdom> createState() => _WisdomState();
}

class _WisdomState extends State<Wisdom> {

  int _index = 0;

  List<String> quotes = [
    'When it is dark enough, you can see the stars.',
    'Go then, there are other worlds than these.',
    'I envy people that know love. That have someone who takes them as they are.',
    'We are all like the bright moon, we still have our darker side.',
    'You are a manipulator. I like to think of myself more as an outcome engineer.',
    'It is by no means an irrational fancy that, in a future existence, we shall look upon what we think our present existence, as a dream.',
    'Make it dark, make it grim, make it tough, but then, for the love of God, tell a joke.',
    'I knew nothing but shadows and I thought them to be real.',
    'I am terrified by this dark thing that sleeps in me.',
  ];
  @override
  Widget build(BuildContext context) {
    return  Scaffold(
      body: Container(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Expanded(
              child: Center(
                child: Container(
                    width: 350,
                    height: 200,
                    margin: EdgeInsets.all(30.0),
                    decoration: BoxDecoration(
                        color: Colors.transparent,
                        borderRadius: BorderRadius.circular(14.5)
                    ),
                    child: Center(child: Text(quotes[_index % quotes.length],
                      style: TextStyle(
                          color: Colors.grey.shade600,
                          fontStyle: FontStyle.italic,
                          fontSize: 16.5
                      ),
                    ))),
              ),
            ),
            Divider(thickness: 1.3,),
            Padding(
              padding: const EdgeInsets.only(top: 18.0),
              child: TextButton.icon(onPressed: _showQuote, style: TextButton.styleFrom(backgroundColor: Colors.greenAccent.shade700), icon: Icon(Icons.wb_sunny), label: Text("inspire me", style: TextStyle(
                  fontSize: 18.8,
                  color: Colors.white
              ),)),
            ),
            Spacer()
          ],
        ),
      ),
    );
  }

  void _showQuote() {
    setState(() {
      _index += 1;
    });
  }
}