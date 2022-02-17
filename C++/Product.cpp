#include<iostream>
#include<string>

using namespace std;

class Product{


    private :
    int idProduct;
    int price;


    public :
    Product(){

    }

    Product(int id, int p){
        idProduct = id;
        price = p;
    }

    void setIdProduct(int id){
        idProduct = id;
    }

    void setPrice(int p){
        price = p;
    }

    int getIdProduct(){
        return idProduct;
    }

    int getPrice(){
        return price;
    }

    

    ~Product(){

    }
};
