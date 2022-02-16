public class Hardware extends Product {
    String brand;
    String model;

    Hardware(){

    }

    Hardware(String brand, String model){
        this.brand = brand;
        this.model = model;
    }

    void setBrand(String brand){
        this.brand = brand;
    }

    void SetModel(String model){
    
        this.model = model;
    }

    String getBrand(){
        return this.brand;
    }

    String getModel(){
        return this.model;
    }

}
