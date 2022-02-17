#include<iostream>
#include<string>
#include "Product.cpp"

using namespace std;

class Hardware : public Product {

    private:
    string brand;
    string model;
    
    

    public :
    Hardware(){

    }


    Hardware(string br, string md){
        brand = br;
        model = md;
        
    }

    
    void setBrand(string br){
        brand = br;
    }

    void setModel(string md){
    
        model = md;
    }

    string getBrand(){
        return brand;
    }

    string getModel(){
        return model;
    }

    ~Hardware(){
        
    }
};
