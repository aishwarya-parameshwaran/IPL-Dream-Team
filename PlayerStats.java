import java.io.*;
import java.util.*;
import java.nio.file.*;
import java.nio.charset.Charset;

class PlayerStats
{
	public static void main(String args[])throws Exception
	{
		List<String> playername = Files.readAllLines(Paths.get("playername.txt"), Charset.defaultCharset());
		String name = playername.toString();
		
		name = name.replace("[","");
		name = name.replace("]","");
		
		List<String> player = Files.readAllLines(Paths.get("MI.csv"), Charset.defaultCharset());
		String[] playerarray = new String[player.size()];
		String[][] playerlist = new String[playerarray.length][7];
    	player.toArray(playerarray);
		for(int i=0;i<playerarray.length;i++)
		{
			playerlist[i] = playerarray[i].split(",");
		}
		
		for(int i=0;i<playerarray.length;i++)
		{
			
			if(playerlist[i][0].equals(name))
			{
				System.out.println(playerlist[i][1]+"	"+playerlist[i][2]+"	"+playerlist[i][3]+"	"+playerlist[i][4]+"	"+playerlist[i][5]+"	"+playerlist[i][6]+"	"+playerlist[i][7]);
			}
		}
			
		
	}
}