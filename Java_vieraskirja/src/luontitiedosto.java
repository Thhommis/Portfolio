import java.io.BufferedWriter;
import java.io.FileWriter;
import java.util.*;

import javax.swing.JOptionPane;
public class luontitiedosto{

	private FileWriter x;
	private BufferedWriter xbw;

	public void uusiRivi(String tiedostonimi,String enimi,String snimi,String ika) {
	
	
	try {
		x= new FileWriter(tiedostonimi);
		BufferedWriter xbw= new BufferedWriter(x);
		xbw.write(String.format("%s,%s,%s", ika, enimi, snimi));
		xbw.newLine();
		xbw.close();
	}
	catch (Exception e){
		JOptionPane.showMessageDialog(null, "Tiedosto luotiin onnistunesti!");
	{
		
	}
  }
}
}