from Hardware import Hardware


class Memory(Hardware):


    def __init__(self, frekuensi= 0, size= 0, cuda= 0):
        self.frekuensi = frekuensi
        self.size = size
        self.cuda = cuda
        
    def set_frekuensi(self, frekuensi):
        self.frekuensi = frekuensi    

    def set_size(self, size):
        self.size = size

    def set_cuda(self, cuda):
        self.cuda = cuda
    
    def get_frekuensi(self):
        return self.frekuensi

    def get_size(self):
        return self.size
    def get_cuda(self):
        return self.cuda