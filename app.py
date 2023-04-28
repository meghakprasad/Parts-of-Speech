import nltk
import mysql.connector
from flask import Flask, render_template, request

# Connect to MySQL database
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="pos"
)

if mydb.is_connected():
    print("Connected to MySQL database")
else:
    print("Error connecting to MySQL database")

mycursor = mydb.cursor()

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/analyze', methods=['POST'])
def analyze():
    # Get the input sentence from the form
    sentence = request.form['sentence']

    # Tokenize sentence into words
    tokens = nltk.word_tokenize(sentence)

    # Tag the parts of speech in the sentence
    pos_tags = nltk.pos_tag(tokens)

    # Create a dictionary to map part-of-speech tags to their full forms
    pos_map = {
        'CC': 'Conjunction',
        'CD': 'Numeral',
        'DT': 'Determiner',
        'EX': 'Pronoun',
        'FW': 'Foreign word',
        'IN': 'Preposition',
        'JJ': 'Adjective',
        'JJR': 'Adjective',
        'JJS': 'Adjective',
        'LS': 'Other',
        'MD': 'Verb',
        'NN': 'Noun',
        'NNS': 'Noun',
        'NNP': 'Noun',
        'NNPS': 'Noun',
        'PDT': 'Determiner',
        'POS': 'Other',
        'PRP': 'Pronoun',
        'PRP$': 'Pronoun',
        'RB': 'Adverb',
        'RBR': 'Adverb',
        'RBS': 'Adverb',
        'RP': 'Particle',
        'SYM': 'Symbol',
        'TO': 'Preposition',
        'UH': 'Interjection',
        'VB': 'Verb',
        'VBD': 'Verb',
        'VBG': 'Verb',
        'VBN': 'Verb',
        'VBP': 'Verb',
        'VBZ': 'Verb',
        'WDT': 'Determiner',
        'WP': 'Pronoun',
        'WP$': 'Pronoun',
        'WRB': 'Adverb',
        '.': 'PUNCT',
        ',': 'PUNCT',
        ':': 'PUNCT',
        ';': 'PUNCT',
        '?': 'PUNCT',
        '!': 'PUNCT',
        '(': 'PUNCT',
        ')': 'PUNCT',
        '[': 'PUNCT',
        ']': 'PUNCT',
        '{': 'PUNCT',
        '}': 'PUNCT',
        '\"': 'PUNCT',
        '\'': 'PUNCT',
        '-': 'PUNCT',
        '--': 'PUNCT',
        '_': 'PUNCT',
        '/': 'PUNCT',
        '\\': 'PUNCT',
        '@': 'PUNCT',
        '#': 'PUNCT',
        '$': 'PUNCT',
        '%': 'PUNCT',
        '^': 'PUNCT',
        '&': 'PUNCT',
        '*': 'PUNCT',
        '+': 'PUNCT',
        '=': 'PUNCT',
        '<': 'PUNCT',
        '>': 'PUNCT',
        '|': 'PUNCT',
        '`': 'PUNCT',
        '~': 'PUNCT'
    }

    # Replace part-of-speech tags with their full forms
    pos_tags = [(word, pos_map[tag]) for word, tag in pos_tags]

     # Check if sentence already exists in the database
    sql_select = "SELECT COUNT(*) FROM parts_of_speech WHERE sentence = %s"
    val_select = (sentence,)
    mycursor.execute(sql_select, val_select)
    result = mycursor.fetchone()

    if result[0] == 0:
        # Insert the sentence and part of speech into MySQL database
        sql_insert = "INSERT IGNORE INTO parts_of_speech (sentence, pos) VALUES (%s, %s)"
        val_insert = (sentence, str(pos_tags))
        mycursor.execute(sql_insert, val_insert)
        mydb.commit()

    # Render the results template with the parts of speech
    return render_template('results.php', pos_tags=pos_tags)


if __name__ == '__main__':
    app.run(debug=True)
