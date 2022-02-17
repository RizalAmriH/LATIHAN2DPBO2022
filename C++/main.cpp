#include <iostream>
#include <string>

using namespace std;


#include "Memory.cpp"

int main(){

    
    Memory memori;

    memori.setIdProduct(12);
    memori.setPrice(5000000);
    memori.setBrand("Nvidia");
    memori.setModel("RTX 3090");
    memori.setFrekuensi(2000);
    memori.setSizes(12);
    memori.setCuda("Supported");

    cout << "ID Produk : ";
	cout << memori.getIdProduct() << endl;
	cout << "Harga : ";
	cout << memori.getPrice() << endl;
	cout << "Nama Brand : ";
	cout << memori.getBrand() << endl;
    cout << "Model : ";
	cout << memori.getModel() << endl;
	cout << "Frekuensi : ";
	cout << memori.getFrekuensi() << endl;
	cout << "Size memori (dalam GB) : ";
	cout << memori.getSize() << endl;
    cout << "Support Cuda : ";
	cout << memori.getCuda() << endl;




    return 0;
}
