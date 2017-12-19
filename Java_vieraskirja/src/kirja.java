import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextField;



public class ikkuna1 extends JFrame {
private JLabel ikaLabel;
private JLabel nimiLabel;
private JLabel sukunimiLabel;

private JTextField ikaText;
private JTextField enimiText;
private JTextField snimiText;

private JButton okButton;
private JButton naytaButton;

public ikkuna1(){

super("Vieraskirja v.01");
setLayout(new FlowLayout());
ikaLabel = new JLabel("Ik‰");
add(ikaLabel);

okButton = new JButton("Lis‰‰");
naytaButton = new JButton("N‰yt‰ vieraskirja");

add(ikaLabel);
add(ikaText);
add(nimiLabel);
add(enimiText);
add(sukunimiLabel);
add(snimiText);
add(okButton);
add(naytaButton);

okButton.addActionListener(
new ActionListener(){
public void actionPerformed(ActionEvent event){
//t‰ss‰ on kaikki mit‰ ok-painike tekee
JOptionPane.showMessageDialog(null, "Painoit ok!");

//luontitiedosto x = new luontitiedosto();
x.uusiRivi("lista.txt", enimiText.getText(), snimiText.getText(), ikaText.getText());
}
}
);

}
}
