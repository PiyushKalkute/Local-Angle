# Convert json file to spaCy format.
import plac
import logging
import argparse
import sys
import os
import json
import pickle

@plac.annotations(input_file=("ner_corpus_260.json", "option", "i", str), output_file=("ner_corpus_260", "option", "o", str))

def main(input_file="ner_corpus_260.json", output_file="ner_corpus_260"):
    try:
        training_data = []
        lines=[]
        with open(input_file, 'rb') as f:
            lines = f.readlines()

        for line in lines:
            data = json.loads(line)
            text = data['content']
            entities = []
            for annotation in data['annotation']:
                point = annotation['points'][0]
                labels = annotation['label']
                if not isinstance(labels, list):
                    labels = [labels]

                for label in labels:
                    entities.append((point['start'], point['end'] + 1 ,label))


            training_data.append((text, {"entities" : entities}))

        print(training_data)

        with open(output_file, 'wb') as fp:
            pickle.dump(training_data, fp)

    except Exception as e:
        logging.exception("Unable to process " + "\n" + "error = " + str(e))
        return None
if __name__ == '__main__':
    plac.call(main)