class Product :


    def __init__(self, idProduct= 0, price = 0):
        self.idProduct = idProduct
        self.price = price
        
    def set_IdProduct(self, idProduct):
        self.idProduct = idProduct    

    def set_price(self, price):
        self.price = price

    
    def get_idProduct(self):
        return self.idProduct

    def get_price(self):
        return self.price

 
       
