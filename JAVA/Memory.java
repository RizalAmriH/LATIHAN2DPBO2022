public class Memory extends Hardware{

    String frekuensi;
    String size;
    String cuda;
    
    Memory(){

    }


    Memory(String frekuensi, String size, String cuda){
        this.frekuensi = frekuensi;
        this.size = size;
        this.cuda = cuda;
    }

    void setFrekuensi(String frekuensi){
        this.frekuensi = frekuensi;
    }

    void setSizes(String size){
        this.size = size;
    }

    void setCuda(String cuda){
        this.cuda = cuda;
    }

    String getFrekuensi(){
        return this.frekuensi;
    }

    String getSize(){
        return this.size;
    }

    String getCuda(){
        return this.cuda;
    }

}
