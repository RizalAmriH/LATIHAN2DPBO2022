<!DOCTYPE html>
<html>
	<head>
		<title>LATIHAN 2 DPBO 2022</title>
		
        <?php
        include "Product.php";
        include "Hardware.php";
        include "Memory.php";

	
        $baru = new Memory();
        $baru->setIdProduct("021");
        $baru->setPrice(500000);
        $baru->setBrand("Nvidia");
        $baru->setModel("RTX 3090");
        $baru->setFrekuensi(4200);
        $baru->setSize(12);
        $baru->setCuda("Supported");



        ?>

      

    <style>

    table, th,td{
    border: 1px solid black;
    padding: 20px;
    border-collapse: collapse;
    }

  
    </style>

    </head>
	
	<body>
	
	
		<div class="container">
			<br>
			<CENTER><h1>Data Product</h1></CENTER>
			
		<CENTER>
			<table>
				<thead>
					<tr>
						<th >ID Product</th>
						<th >Harga</th>
						<th >Nama Brand</th>
						<th >Model</th>
                        <th >Frekuensi</th>
						<th >Size Memory(GB)</th>
						<th >Suppor Cuda</th>
					
	
					</tr>
				</thead>
				<?php
						
						echo "<tr>";
						echo "<td>".$baru->getIdProduct()."</td>";
						echo "<td>".$baru->getPrice()."</td>";
						echo "<td>".$baru->getBrand()."</td>";
                        echo "<td>".$baru->getModel()."</td>";
						echo "<td>".$baru->getFrekuensi()."</td>";
						echo "<td>".$baru->getSize()."</td>";
                        echo "<td>".$baru->getCuda()."</td>";
                        
                      	echo "</td>";
						echo "</tr>";
						
				
				?>
			</table>
            </CENTER>
		</div>
	</body>
</html>
