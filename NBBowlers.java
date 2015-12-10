import java.io.*;
import java.util.*;
import java.sql.*;

public class NBBowlers
{
 public static void main(String args[]) throws Exception
 {
	String result=null;
	String playerName=null,totalnames=null;
	Connection connew = DriverManager.getConnection("jdbc:odbc:NBBatsmen");
	Statement stnew = connew.createStatement();
	ResultSet rsnew = stnew.executeQuery("Select * from [Sheet1$]");

	ResultSetMetaData rsmd = rsnew.getMetaData();
        int numberOfColumns = rsmd.getColumnCount();
	String data1,data2,data3,data4;
	int count=1;

	System.out.println("Classifying bowlers:");
	connew = DriverManager.getConnection("jdbc:odbc:NBBowlers");
	stnew = connew.createStatement();
	rsnew = stnew.executeQuery("Select * from [Sheet1$]");

	rsmd = rsnew.getMetaData();
        numberOfColumns = rsmd.getColumnCount();

	count=1;
	String data5,data6;
	int totalplayers=0;
	while (rsnew.next()) {
 		count++;
                if(count<=88){
		playerName=rsnew.getString(2);
		data1=rsnew.getString(10);
		data2=rsnew.getString(11);
		data3=rsnew.getString(12);
		data4=rsnew.getString(20);
		data5=rsnew.getString(21);
		data6=rsnew.getString(22);
		result=NaiveBayesBowlers(data1,data2,data3,data4,data5,data6);
		if(result=="Acceptable"){
		//System.out.println(playerName);
		totalplayers++;
			}
		}
		else{
		break;}
	}
	System.out.println(totalplayers);

 }

  static String NaiveBayesBowlers(String average, String economyRate, String strikeRate, String t20Average, String t20EconomyRate, String t20StrikeRate)
 {
  try {
            Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
            Connection con = DriverManager.getConnection("jdbc:odbc:Data2");
            Statement st = con.createStatement();
            ResultSet rs = st.executeQuery("Select * from [Sheet1$]");
 
            ResultSetMetaData rsmd = rs.getMetaData();
            int numberOfColumns = rsmd.getColumnCount();
	   
		double countyes=0, countno=0,totalcount=0;
		double probYes,probNo,averageyes=0,averageno=0,ipleconomyyes=0,ipleconomyno=0,iplstrikerateyes=0,iplstrikerateno=0,ttaverageyes=0,ttaverageno=0,tteconomyrateyes=0,tteconomyrateno=0,ttstrikerateyes=0,ttstrikerateno=0;
 
            while (rs.next()) {
 
                totalcount++;
		String columnValue=rs.getString(7);
		if (columnValue.compareToIgnoreCase("Yes")==0)
		countyes++;
		if (columnValue.compareToIgnoreCase("No")==0)
		countno++;	
		
            			}

	ResultSet rs2 = st.executeQuery("Select * from [Sheet1$]");

	while(rs2.next())
	{
		String Average=rs2.getString(1);
		if(Average.compareTo(average)==0)
		{
			String temp=rs2.getString(7);
			if(temp.compareTo("Yes")==0)
			averageyes++;
			else
			averageno++;
		}
	}
	//System.out.println("Age-<=30 and Buys_Computer-Yes "+ageyes+"\n"+"Age-<=30 and Buys_Computer-No "+ageno);


	ResultSet rs3 = st.executeQuery("Select * from [Sheet1$]");

	while(rs3.next())
	{
		String strikerate=rs3.getString(2);
		if(strikerate.compareTo(economyRate)==0)
		{
			String temp=rs3.getString(7);
			if(temp.compareTo("Yes")==0)
			ipleconomyyes++;
			else
			ipleconomyno++;
		}
	}
	//System.out.println("Income-Medium and Buys_Computer-Yes "+incomeyes+"\n"+"Income-Medium and Buys_Computer-No "+incomeno);



	ResultSet rs4 = st.executeQuery("Select * from [Sheet1$]");

	while(rs4.next())
	{
		String ttaverage=rs4.getString(3);
		if(ttaverage.compareTo(strikeRate)==0)
		{
			String temp=rs4.getString(7);
			if(temp.compareTo("Yes")==0)
			iplstrikerateyes++;
			else
			iplstrikerateno++;
		}
	}
	//System.out.println("Student-Yes and Buys_Computer-Yes "+studentyes+"\n"+"Student-No and Buys_Computer-No "+studentno);
	


	ResultSet rs5 = st.executeQuery("Select * from [Sheet1$]");

	while(rs5.next())
	{
		String t20statistics=rs5.getString(4);
		if(t20statistics.compareTo(t20Average)==0)
		{
			String temp=rs5.getString(7);
			if(temp.compareTo("Yes")==0)
			ttaverageyes++;
			else
			ttaverageno++;
		}
	}
	//System.out.println("Credit-Fair and Buys_Computer-Yes "+credityes+"\n"+"Credit-Fair and Buys_Computer-No "+creditno);


	ResultSet rs6 = st.executeQuery("Select * from [Sheet1$]");

	while(rs6.next())
	{
		String t20statistics=rs6.getString(6);
		if(t20statistics.compareTo(t20EconomyRate)==0)
		{
			String temp=rs6.getString(7);
			if(temp.compareTo("Yes")==0)
			tteconomyrateyes++;
			else
			tteconomyrateno++;
		}
	}

	ResultSet rs7 = st.executeQuery("Select * from [Sheet1$]");

	while(rs7.next())
	{
		String t20statistics=rs7.getString(6);
		if(t20statistics.compareTo(t20StrikeRate)==0)
		{
			String temp=rs7.getString(7);
			if(temp.compareTo("Yes")==0)
			ttstrikerateyes++;
			else
			ttstrikerateno++;
		}
	}




 		probYes=(countyes/totalcount);
		probNo=(countno/totalcount);

		double acceptableyes=0,acceptableno=0;
		acceptableyes=(  (averageyes*ipleconomyyes*iplstrikerateyes*ttaverageyes*tteconomyrateyes*ttstrikerateyes)/(Math.pow(countyes,numberOfColumns-1))  ) * probYes;
		acceptableno=(   (averageno*ipleconomyno*iplstrikerateno*ttaverageno*tteconomyrateno*ttstrikerateno)/(Math.pow(countno,numberOfColumns-1))       )* probNo;

		String returnValue=null;
		if(acceptableyes>=acceptableno)
		returnValue="Acceptable";
		else
		returnValue="Not acceptable";

		
		
		


	
            st.close();
            con.close();
		return returnValue;
 
        } catch (Exception ex) {
            return ex.toString();

        }
    }
}