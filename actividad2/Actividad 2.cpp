#include <iostream>
#include <cstdlib>
using namespace std;
main()
{double num1,num2,div1,div2;
 
 cout<<"\n ingrese primer nuemro:";
 cin>>num1;
 cout<<"\n ingrese sgundo numero:";
 cin>>num2;

 div1 = num1/num2;
 div2 = num2/num1;
 
 cout<<"\n numero :"<<num1<<" dividido por "<<num2<<" Es: "<<div1;
 cout<<"\n numero :"<<num2<<" dividido por "<<num1<<" Es: "<<div2;

 return 0;
}

