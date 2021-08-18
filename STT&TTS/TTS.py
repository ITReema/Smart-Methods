from ibm_watson import TextToSpeechV1
from ibm_cloud_sdk_core.authenticators import IAMAuthenticator

url = 'https://api.us-east.text-to-speech.watson.cloud.ibm.com/instances/5fe0d3ac-64bb-4c6e-ad31-8a7b5051ead3'
apikey = 'xuU1PDlLZidbxyj8nW8CP574XPXbIPYBe2QokSYVbvz2'

# Setup Service
authenticator = IAMAuthenticator(apikey)
tts = TextToSpeechV1(authenticator = authenticator)
tts.set_service_url(url)

with open('output.txt', 'r') as f:
    text = f.readlines()
text = [line.replace('\n','') for line in text]
text = ''.join(str(line) for line in text)

with open('./speech.mp3', 'wb') as audio_file:
    res = tts.synthesize(text, accept='audio/mp3', voice='en-US_AllisonV3Voice').get_result()
    audio_file.write(res.content)
