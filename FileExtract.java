import java.io.*;
import java.nio.file.*;
import java.util.*;
import java.nio.charset.Charset;

public class FileExtract
{
	
	public static void main(String args[])throws Exception
	{
		double sum=0.0;	
	double add=0;
		List<String> tweets = Files.readAllLines(Paths.get("tweets.txt"), Charset.defaultCharset());
		String[] tweetarray = new String[tweets.size()];
    		//tweets.toArray(tweetarray);
		String tweetstream;
		tweetstream = tweets.toString();
		String [] tweetlist = new String[tweets.size()];

		List<String> lexicon = Files.readAllLines(Paths.get("unigrams-pmilexicon.txt"), Charset.defaultCharset());
		String urlPattern = "((https?|ftp|gopher|telnet|file|Unsure|http):((//)|(\\\\))+[\\w\\d:#@%/;$()~_?\\+-=\\\\\\.&]*)";
		String username = "((@)+[\\w\\d0-9]*)";
		
		 
		tweetstream = tweetstream.replace("\\n", " ");
		tweetstream = tweetstream.replace("\\u", " ");
		
		tweetstream = tweetstream.replaceAll(username,"");
		tweetstream = tweetstream.replaceAll(urlPattern,"");
		tweetstream = tweetstream.replace("{","");
		tweetstream = tweetstream.replace("[","");
		tweetstream = tweetstream.replace("]","");
		tweetstream = tweetstream.replace("tweet","");
		tweetstream = tweetstream.replace("\"","");
		tweetstream = tweetstream.replace(":","");
		tweetstream = tweetstream.replace("&amp;","");
		tweetstream = tweetstream.replace("}","");
		tweetstream = tweetstream.replace(",","");
		tweetstream = tweetstream.replace("?","");
		tweetstream = tweetstream.replace("!","");
		tweetstream = tweetstream.replace("."," ");
		tweetstream = tweetstream.replaceAll("(\\s)+(a|an|the)+(\\s)"," ");
		tweetstream = tweetstream.replaceAll("(\\s)+(is|was|were|am|has|have|and|or|either)+(\\s)"," ");
		tweetstream = tweetstream.replaceAll("(\\s)+(she|he|we|him|her|us|our|I|i|my|mine|ours|they|them|it)+(\\s)"," ");
		tweetstream = tweetstream.replaceAll("(\\s)+(\\w){1}+(\\s)"," ");
		tweetstream = tweetstream.replace("RT","");
		tweetstream = tweetstream.replaceAll("[0-9]","");
		//tweetarray = tweetstream.split("},");
		tweetarray = tweetstream.split(" ");
	/*for(int i=0;i<10;i++)
		{
			System.out.println(tweetarray[i]);
		}	*/
		for(int i=0;i<tweetarray.length;i++)
		{
			tweetarray[i] = tweetarray[i].replace("\\s","");
		
		}
	//System.out.println(tweetarray.length);

	
    //System.out.println(s);
		String[] lexa = new String[lexicon.size()];
		String[][] lexarray = new String[lexa.length][4];
    		lexicon.toArray(lexa);		
		for(int i=0;i<lexa.length;i++)
		{
			lexarray[i] = lexa[i].split("\\s");
		}
	/*for(int i=0;i<lexa.length;i++)
		{
			System.out.println(lexarray[i][1]);
		}*/
		double positive=0;
		double negative=0;
		double total,upperlimit=0,lowerlimit=0,net=0;
		upperlimit=tweetarray.length*7.526;
						lowerlimit=tweetarray.length*(-6.925);
						net=upperlimit-lowerlimit;
					//	System.out.println(lowerlimit);
					//	System.out.println(0.48*net);
		for(int i=0;i<tweetarray.length;i++)
		{
			if(!tweetarray[i].equals(" "))
			{
				for(int j=0;j<lexa.length;j++)
				{
					if(tweetarray[i].toUpperCase().equals(lexarray[j][0].toUpperCase()))
					{
						add=Double.parseDouble(lexarray[j][1]);
						//total=Integer.parseInt(lexarray[j][2])+ Integer.parseInt(lexarray[j][3]);
						//positive=Integer.parseInt(lexarray[j][2])/total;
						//negative=Integer.parseInt(lexarray[j][3])/total;
						/*System.out.println("Intensity:"+add);
						System.out.println("Total:"+total);
						System.out.println("Positive:"+positive);
						System.out.println("Negative:"+negative);
						System.out.println();
						*/
						sum=sum+add;
						
					}
				}
			}
		}
		
	//	System.out.println(upperlimit-0.4975*net);
			System.out.println("The polarity:"+sum);
		//	System.out.println(lowerlimit+0.48*net);
			if(sum<(lowerlimit+0.48*net))
				System.out.println("Negative");
			else if(sum>(upperlimit-0.4975*net))
				System.out.println("Positive");
			else
				System.out.println("Neutral");

		
		//System.out.println(tweetstream);
		//System.out.println(tweetarray);
		
}
}
