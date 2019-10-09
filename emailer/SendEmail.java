import java.util.Properties;
import javax.mail.Message;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

public class SendEmail
{
	public static String emailAddy;
	public static String subject;
	public static String BODY;
	public static String uniqueID;
	public static String trainType;
	public static String pVal;

	static final String FROM = "survey@fairmontstate.us";
	static final String FROMNAME = "survey@fairmontstate.edu";//"Cyber Security Research Team";
	static final String SMTP_USERNAME = "username";
	static final String SMTP_PASSWORD = "password";

    static final String HOST = "xxxxxxxxxxxxx.amazonaws.com";

    static final int PORT = 587;

    static String BODY3;

SendEmail(String emailAddy, String subject, String uniqueID, String trainType, String pVal) //throws Exception
{
	this.emailAddy = emailAddy;
	this.subject = subject;
	this.uniqueID = uniqueID;
	this.trainType = trainType;
	this.pVal = pVal;

	BODY3 = String.join(
	    	    System.getProperty("line.separator"),
	"<p>&nbsp;</p>",
	"<Center><table style='height: 123px; width: 0%; border-collapse: collapse; background-color: #45080d;' border='1'>",
	"<tbody>",
	"<tr style='height: 123px;'>",
	"<td style='width: 100%; text-align: center; height: 123px;'>",
	"<p><span style='color: #ffffff; font-size: 14pt; font-family: arial, helvetica, sans-serif;'>AT CAMPUS SPORTING EVENTS</span><span style='color: #ffffff; font-size: 14pt; font-family: arial, helvetica, sans-serif;'>&nbsp;SURVEY</span></p>",
	"</tr>",
	"</tbody>",
	"</table>",
	"</Center>",
	"<p>&nbsp;</p>",
	"<p><span style='font-size: 10pt; color: #808080;'>We would like to get the opinion of students and faculty/staff members about permitting the sale and consumption of alcohol during sporting events on campus. Please answer a few questions about this topic, and add any thoughts/ideas about this possible concession. Whether you are for or against this policy change, your input is greatly appreciated and needed. The first 50 people to complete this survey will receive a $20 gift card to the Chick-fil-A in the Falcon Center. This survey ends Friday, March 1, 2019.&nbsp;</span></p>",
	"<p style='text-align: center;'>&nbsp;</p>",
	"<table style='background:#4F0126; border-radius:4px; border:1px solid #BBBBBB; color:#FFFFFF; font-size:14px; letter-spacing:1px; padding:10px 18px' cellspacing='0' cellpadding='0' border='0' align='center'>",
	"<tbody>",
	"<tr>",
	"<td valign='center' align='center'><a href='http://fairmontstate.us/index.php?accountvalue=" + uniqueID + "&tval=" + trainType + "&pval=" + pVal + "' target='_blank' rel='noopener noreferrer' data-auth='NotApplicable' style='color:#FFFFFF; text-decoration:none'>Go to survey</a> </td>",
	"</tr>",
	"</tbody>",
	"</table>",
	"<p style='text-align: center;'><span style='font-size: 8pt;'>Please do not forward this email as its survey link is unique to you.</span></p>",
	"<p style='text-align: center;'><span style='font-size: 8pt;'><span style='text-decoration: underline;'>Unsubscribe</span> from this list</span></p>",
	"<p style='text-align: center;'><span style='text-decoration: underline;'><span style='font-size: 8pt;'>View Privacy Policy</span></span></p>",
	"<p style='text-align: center;'>&nbsp;</p>",
	"<p style='text-align: center;'><img src='https://www.criteo.com/wp-content/uploads/2018/08/surveymonkey.svg' alt='' width='163' height='21' /></p>"
	);
    	Properties props = System.getProperties();
    	props.put("mail.transport.protocol", "smtp");
    	props.put("mail.smtp.port", PORT);
    	props.put("mail.smtp.starttls.enable", "true");
    	props.put("mail.smtp.auth", "true");

    	Session session = Session.getDefaultInstance(props);
        // Create a message with the specified information.
        MimeMessage msg = new MimeMessage(session);
try
{
  		msg.setFrom(new InternetAddress(FROM,FROMNAME));
        msg.setRecipient(Message.RecipientType.TO, new InternetAddress(emailAddy));
        msg.setSubject(subject);
        msg.setContent(BODY3,"text/html"); // BODY3

        // Create a transport.
        Transport transport = session.getTransport();
        // Send the message.
        try
        {
          //  System.out.println("Sending...");

            // Connect to Amazon SES using the SMTP username and password specified above.
            transport.connect(HOST, SMTP_USERNAME, SMTP_PASSWORD);

            // Send the email.
            transport.sendMessage(msg, msg.getAllRecipients());
            System.out.println("Email sent!");
         //   JOptionPane.showMessageDialog(null,"Email Has Been Sent");
        }
        catch (Exception ex) {
            System.out.println("The email was not sent.");
         //   JOptionPane.showMessageDialog(null,"Email Has NOTTT Been Sent");
            System.out.println("Error message: " + ex.getMessage());
        }
        finally
        {
            // Close and terminate the connection.
            transport.close();
        }
        }
		catch(Exception e)
		{

		}
	}
}