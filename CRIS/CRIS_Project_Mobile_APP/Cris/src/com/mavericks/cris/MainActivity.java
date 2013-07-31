package com.mavericks.cris;

import android.app.Activity;
import android.content.Intent;
import android.content.res.Configuration;
import android.net.Uri;
import android.os.Bundle;
import android.util.Log;
import android.view.Window;
import android.webkit.WebChromeClient;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.FrameLayout;
import android.widget.Toast;

public class MainActivity extends Activity
{
    public static final String GRAASP_URL = "http://projects.iic.ac.in/nic/Mavericks/cris/main/";

    private WebView browser;
    protected FrameLayout webViewPlaceholder;
    private final Activity activity = this;
    private static String url = null;

    @Override
    public void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_INDETERMINATE_PROGRESS);
        getWindow().requestFeature(Window.FEATURE_PROGRESS);
        setContentView(R.layout.activity_main);

        initUI();
    }

    private void initUI()
    {
        //retrieve UI elements
        webViewPlaceholder = ((FrameLayout)findViewById(R.id.webViewPlaceholder));

        //initialize the WebView if necessary
        if (browser == null)
        {
            browser = new WebView(this);

            //set browser settings
            //javascript on
            browser.getSettings().setJavaScriptEnabled(true);
            //allow zooming
            browser.getSettings().setBuiltInZoomControls(true);
            //set web page size to device screen size
            browser.getSettings().setLoadWithOverviewMode(true);
            browser.getSettings().setUseWideViewPort(true);
            browser.getSettings().setLoadsImagesAutomatically(true);

            //set progress
            showProgress();
            //show error msgs &
            //set the linking behaviour of the browser
            setWebViewClient();

            //load the web page
            browser.loadUrl((url == null ? GRAASP_URL: url));
        }

        //put the browser in its placeholder
        webViewPlaceholder.addView(browser);

    }

    @Override
    public void onConfigurationChanged(Configuration newConfig)
    {
        if (browser != null)
        {
            // Remove the WebView from the old placeholder
            webViewPlaceholder.removeView(browser);
        }

        super.onConfigurationChanged(newConfig);

        // Load the layout resource for the new configuration
        setContentView(R.layout.activity_main);

        // Reinitialize the UI
        initUI();
    }

    @Override
    protected void onSaveInstanceState(Bundle outState)
    {
        super.onSaveInstanceState(outState);

        // Save the state of the WebView
        //browser.savePicture(outState, new File("savedDisplayWebView.temp"));
        browser.saveState(outState);
    }

    @Override
    protected void onRestoreInstanceState(Bundle savedInstanceState)
    {
        super.onRestoreInstanceState(savedInstanceState);

        // Restore the state of the WebView
        browser.restoreState(savedInstanceState);
        //browser.restorePicture(savedInstanceState, new File("savedDisplayWebView.temp"));
    }

    private void setWebViewClient()
    {
        browser.setWebViewClient(new WebViewClient()
        {
            //show errors in a toast (small popup msg box)...
            public void onReceivedError(WebView view, int errorCode, String description, String failingUrl)
            {
                Toast.makeText(activity, "Oh, snap! " + description, Toast.LENGTH_SHORT).show();
            }

            //On Android 1.1 shouldOverrideUrlLoading() will be called every time the user clicks a link,
            //but on Android 1.5 it will be called for every page load, even if it was caused by calling loadUrl()!
            @ Override
            public boolean shouldOverrideUrlLoading(WebView view, String url)
            {
                Log.d(MainActivity.class.getName(), "opening url! url host: " + Uri.parse(url).getHost());
                if (Uri.parse(url).getHost().equals("graasp.epfl.ch"))
                {
                    // This is my web site, so do not override; let my WebView load the page
                    return false;
                }
                // Otherwise, the link is not for a page on my site, so launch another Activity that handles URLs
                Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
                startActivity(intent);
                return true;
            }
        });
    }

    private void showProgress()
    {
        browser.setWebChromeClient(new WebChromeClient() {
            public void onProgressChanged(WebView view, int progress)
            {
                //set the title of the app to reflect the loading
                activity.setTitle(R.string.loading_app_name);
                //when the loading is done, set the main app title
                if(progress == 100)
                {
                    activity.setTitle(R.string.app_name);
                }

                // Activities and WebViews measure progress with different scales.
                // The progress meter will automatically disappear when we reach 100%
                activity.setProgress(progress * 100);
                Log.d(MainActivity.class.getName(), "progress = " + progress);
            }
        });
    }
}
