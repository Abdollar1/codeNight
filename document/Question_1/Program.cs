using System;

namespace Question_1
{
    class Program
    {
        static void Main(string[] args)
        {
            String totalCourseOffered;
            int courseEntered;
            String score;
            String creditHour;
            int numerator, denumerator;

            //welcome the user and prompt him/her to follow the instructions    
            Console.WriteLine(" Welcome \n To Calculate Your Weighted Average (WA) \n Please Follow the Instructions");
            //ask him to enter total course offerred within the semester
            Console.WriteLine("Enter Total Course Offerred for the Semester");
            totalCourseOffered = Console.ReadLine();
            courseEntered = int.Parse(totalCourseOffered);
            //check if course entered is more than 0 if not about the process.
           
            if (int.Parse(totalCourseOffered) > 0) {
              Console.WriteLine("Total Course Offered: "+totalCourseOffered);
            
                for (int i = 0; i < courseEntered; i++)
                {

                    Console.WriteLine("Enter You Score");
                    score = Console.ReadLine();
                     
                    Console.WriteLine("Enter Credit Hour");
                    creditHour =Console.ReadLine();
                    Console.WriteLine("You Scored: " + score +"\n" + "Credit Hour: " + creditHour);
                    for (int x = 0; courseEntered ==0; x++) {
                       numerator = int.Parse(score) * int.Parse(creditHour);
                        Console.WriteLine(numerator);
                    };
                    

                }
                //the numerator will store the product of score and creditHours
                //numerator = int.Parse(score) * int.Parse(creditHour);
                //denomerator will store the total credit entered
                //denumerator = courseEntered;
                //Console.WriteLine(numerator / denumerator);
            
            }
            else
            {
               Console.WriteLine("Please Enter Total Course");
            }


        }
    }
}
