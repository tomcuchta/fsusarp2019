import javax.swing.JOptionPane;
import java.io.*;


//###################################################
public class SarpSpammer
{

	//==============================================
	public static void main (String args[])
	{
		System.out.println("Starting application...");

		new MainDispatcher();

		System.out.println("Done.");
	}

}
class MainDispatcher
{
	File				file;
	FileInputStream	  	fileInput;
	FileOutputStream    fileOutput;
	String				sub3 = "Campus Survey";


	public MainDispatcher()
	{
		BufferedReader buffReader;
		String tmp;
		String[] data;
		int emailNum;

		file = new File("emailAddysGen1.txt");//("B1D1P1Test.csv");
		try
		{
			fileInput = new FileInputStream(file);


			if(file.exists())
			{
				buffReader = new BufferedReader(new FileReader(file));
				while(buffReader.ready())
				{
					tmp = buffReader.readLine();
				//	System.out.println(tmp);

					data = tmp.split(",");
					System.out.println(data[0].trim());
					System.out.println(data[1].trim());
					System.out.println(data[2].trim());
					new SendEmail(data[0], sub3, data[1], data[2],"P1");
					System.out.println("email #: " + emailNum + " has been sent!!!");
					emailNum++;
				}
				buffReader.close();
			}
		}
		catch(FileNotFoundException fnfe)
		{
			JOptionPane.showMessageDialog(null,"File error.");
		}
		catch(IOException ioe)
		{
			JOptionPane.showMessageDialog(null,"General error.");
		}
	}
}
