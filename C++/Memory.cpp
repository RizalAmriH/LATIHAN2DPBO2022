#include<iostream>
#include<string>
#include "Hardware.cpp"


using namespace std;



class Memory :  public Hardware{

    private:
    int frekuensi;
    int size;
    string cuda;
    

    public :
    Memory(){

    }


    Memory(int fr, int sz, string ca){
        frekuensi = fr;
        size = sz;
        cuda = ca;
    }

    void setFrekuensi(int fr){
        frekuensi = fr;
    }

    void setSizes(int sz){
        size = sz;
    }

    void setCuda(string ca){
        cuda = ca;
    }

    int getFrekuensi(){
        return frekuensi;
    }

    int getSize(){
        return size;
    }

    string getCuda(){
        return cuda;
    }


    ~Memory(){
        
    }
};
