public class Product {
    String idProduk;
    String price;


    Product(){

    }

    Product(String idProduk, String price){
        this.idProduk = idProduk;
        this.price = price;
    }

    void setIdProduk(String idProduk){
        this.idProduk = idProduk;
    }

    void setPrice(String price){
        this.price = price;
    }

    String getIdProduk(){
        return this.idProduk;
    }

    String getPrice(){
        return this.price;
    }

    
}
