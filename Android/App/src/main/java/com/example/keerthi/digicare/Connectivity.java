package com.example.keerthi.digicare;

/**
 * Created by Keerthi on 05-11-2016.
 */

public class Connectivity {

    private static String ip="192.168.43.42";

    public static String getIp()
    {
        return ip;
    }

    public static void setIp(String ip) {
        Connectivity.ip = ip;
    }

}
