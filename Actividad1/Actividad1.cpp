#include <iostream>
using namespace std;

int myFunction(int valor) {
	if(valor < 3)
	{
		return valor;
	}
  return myFunction(valor-1)*myFunction(valor-2);
}

int main() {
  cout <<"\n numero :"<< myFunction(5);
  return 0;
}

