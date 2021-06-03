#include <iostream>
#include <cstdlib>
using namespace std;
main()
{int i;
 
 	for (i=1; i<=100; i++) {
		
		
		if (i % 3 == 0 && i % 5 == 0 )
	    {
			cout<<"\n FizzBuzz";
		}
		else{
			if (i % 3 == 0)
		    {
		    	cout<<"\n Fizz";
			}
			if (i % 5 == 0)
		    {
		    	cout<<"\n Buzz";
			}
		}
		
		if (i % 3 != 0 && i % 5 != 0 )
	    {
	    	cout<<"\n"<<i;
		}
	      
	}
 
 

 return 0;
}

