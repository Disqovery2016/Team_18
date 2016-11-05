package com.example.keerthi.digicare;

/**
 * Created by Keerthi on 05-11-2016.
 */

import android.content.BroadcastReceiver;
import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.provider.Telephony;
import android.telephony.SmsMessage;
import android.util.Log;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONObject;

import java.util.Calendar;
import java.util.Date;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * Created by Keerthi on 14-04-2016.
 */

public class SmsBroadCastReceiver extends BroadcastReceiver {

    public static final String SMS_BUNDLE="pdus";

    public void onReceive(Context context,Intent intent) {
        try {
            String smsBody="";
            String address="";
            String smsMess="";
            Bundle intentExtras = intent.getExtras();
            if (intentExtras != null) {
                Object[] sms = (Object[]) intentExtras.get(SMS_BUNDLE);
                SmsMessage smsMessage;
                for (int i = 0; i < sms.length; ++i)
                {
                    if(Build.VERSION.SDK_INT>=Build.VERSION_CODES.M)
                    {
                        String format=intent.getStringExtra("format");
                        smsMessage = SmsMessage.createFromPdu((byte[]) sms[i],format);
                    }
                    else {
                        smsMessage = SmsMessage.createFromPdu((byte[]) sms[i]);
                    }
                    smsBody = smsMessage.getMessageBody().toString();
                    address = smsMessage.getOriginatingAddress();
                }

                    Pattern p = Pattern.compile("[A-Z]{3,4}");
                    Matcher m = p.matcher(smsBody);

                        if (smsBody.indexOf("DigiCare") != -1) {

                            Intent intent1 = new Intent(context, AlertActivity.class).setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);;
                            intent1.putExtra("message", smsBody);
                            context.startActivity(intent1);

                                //     new WebRequest(context).execute(address, array[0], array[1]);
                            Toast.makeText(context, "Pattern Matched", Toast.LENGTH_LONG).show();
                        }
                     else {
                        Toast.makeText(context, "Normal Message", Toast.LENGTH_LONG).show();
                    }
            }
        }
        catch(Exception e)
        {
            String msg=e.toString();
            Toast.makeText(context,msg,Toast.LENGTH_LONG).show();
        }
    }
}
