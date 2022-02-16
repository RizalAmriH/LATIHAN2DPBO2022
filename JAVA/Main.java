public class Main{

    
    public static void main(String[] args){

     
        Memory Baru;
        Baru = new Memory();
      
        Baru.setIdProduk("10");
        Baru.setPrice("300000");

        Baru.setFrekuensi("2000");
        Baru.setSizes("16 Gb");
        Baru.setCuda("Supported");
        Baru.setBrand("Nvidia");
        Baru.SetModel("RTX 3090");
     

       
       
        System.out.println("Id Produk : "+Baru.getIdProduk());
        System.out.println("Harga : Rp "+Baru.getPrice());
        System.out.println("Nama Brand : "+Baru.getBrand());
        System.out.println("Model : "+Baru.getModel());
        System.out.println("Frekuensi : "+Baru.getFrekuensi());
        System.out.println("Size : "+Baru.getSize());
        System.out.println("Support Cuda : "+Baru.getCuda());
       
        
        
    }


  

}