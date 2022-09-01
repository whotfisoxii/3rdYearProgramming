package com.example.module4;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;


public class MainActivity extends AppCompatActivity {

    String TAG = "LogCat";
    TextView Sagotone;
    TextView Sagottwo;

    int num1 = 5;
    int num2  =10;
    int sum1, sum2;
    int sum3, sum4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Log.d(TAG, "John Herbert Lanao");
    }

    @Override
    protected void onStart() {
        super.onStart();

        Sagotone = findViewById(R.id.Sagotone);
        Sagottwo = findViewById(R.id.Sagottwo);

        sum1 = num1 + 2;
        sum2 = num2 + 2;

        Sagotone.setText(Integer.toString(sum1));
        Sagottwo.setText(Integer.toString(sum2));


        Log.d(TAG, "On Start");
    }
    @Override
    protected void onPause() {
        super.onPause();

        sum3 = sum1+ 2;
        sum4 = sum2 + 2;

        Sagotone.setText(Integer.toString(sum3));
        Sagottwo.setText(Integer.toString(sum4));

        Log.d(TAG, "On Pause");
    }

    @Override
    protected void onResume() {
        super.onResume();
        Log.d(TAG, "On Resume");
    }


    @Override
    protected void onStop() {
        super.onStop();
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
    }

    @Override
    protected void onRestart() {
        super.onRestart();
    }
}