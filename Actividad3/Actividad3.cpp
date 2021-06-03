#include <iostream>

using namespace std;

int main(){
    //definicion de variables
    char myGrade = 'L';
    
    while(myGrade != 'S')
	{	
		cout<<"\n ingrese opcion \n C- Comprobar numero perfecto \n S- Salir \n";
 		cin>>myGrade;
		if(myGrade == 'C')
		{
			int primero,i,s = 0;
		    int numper = 0;
		    cout<<"COMPROBAR NUMEROS PERFECTOS.\n\n";
		    cin>>numper;
		
		    for (i=1; i<numper-1; i++) {
			    if (numper % i == 0)
			    {
			    	if (s == 0)
			    	{
			    		primero = i;
					}
			    	s += i;
				}
			      
			}
			if (numper == s)
			{
				cout << s<<" es perfecto por que "<<s<<" = ";
				for (i=1; i<numper-1; i++) {
			    if (numper % i == 0 && numper != i)
				    {
				    	if(primero == i)
				    	{
				    		cout <<i;
						}
						else
						{
							cout <<"+"<<i;	
						}
				    	
					}
				      
				}
			}
			else {
				cout << "\n El numero no es perfecto \n";
			}		
		}
		if (myGrade != 'C' && myGrade != 'S')
		{
			cout<<"Comando no valido\n\n";
		} 
	}
    return 0;
}
