from Memory import Memory


baru = Memory()

baru.set_IdProduct(124)
baru.set_price(600000)
baru.set_brand("Nvidia")
baru.set_model("RTX 3080")
baru.set_frekuensi(5000)
baru.set_size(12)
baru.set_cuda("Supported")

print("ID Product : " + str(baru.get_idProduct()))
print("Price : " + str(baru.get_price()))
print("Brand Name : " + str(baru.get_brand()))
print("Model : " + str(baru.get_model()))
print("Frekuensi(Mhz) : " + str(baru.get_frekuensi()))
print("Size(GB) : " + str(baru.get_size()))
print("Support Cuda : " + str(baru.get_cuda()))


